<?php

namespace App\Controller;

use App\Entity\StockPharmacie;
use App\Form\StockPharmacieType;
use App\Repository\StockPharmacieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Entity\Commande;
use App\Form\CommandeType;

#[Route('/stock/pharmacie')]
class StockPharmacieController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    private function generateSafeFilename(string $originalFilename): string
    {
        // Remplacer les caractères spéciaux et les espaces
        $safeFilename = preg_replace('/[^A-Za-z0-9-]/', '-', $originalFilename);
        // Convertir en minuscules
        $safeFilename = strtolower($safeFilename);
        // Supprimer les tirets multiples
        $safeFilename = preg_replace('/-+/', '-', $safeFilename);
        // Supprimer les tirets au début et à la fin
        $safeFilename = trim($safeFilename, '-');
        
        return $safeFilename;
    }

    #[Route('/', name: 'app_stock_pharmacie_index', methods: ['GET'])]
    public function index(StockPharmacieRepository $stockPharmacieRepository): Response
    {
        return $this->render('stock_pharmacie/index.html.twig', [
            'stock_pharmacies' => $stockPharmacieRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'app_stock_pharmacie_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $stockPharmacie = new StockPharmacie();
        $form = $this->createForm(StockPharmacieType::class, $stockPharmacie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload d'image
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->generateSafeFilename($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $stockPharmacie->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image');
                }
            }

            $stockPharmacie->updateStatu();
            $this->entityManager->persist($stockPharmacie);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_stock_pharmacie_index');
        }

        return $this->render('stock_pharmacie/new.html.twig', [
            'stock_pharmacie' => $stockPharmacie,
            'form' => $form,
        ]);
    }

    #[Route('/livraisons', name: 'app_stock_pharmacie_livraisons', methods: ['GET'])]
    public function livraisons(EntityManagerInterface $entityManager): Response
    {
        $commandes = $entityManager->getRepository(Commande::class)->findBy([], ['dateCommande' => 'DESC']);
        
        return $this->render('stock_pharmacie/livraisons.html.twig', [
            'commandes' => $commandes
        ]);
    }

    #[Route('/{id}/livraison/confirmer', name: 'app_stock_pharmacie_livraison_confirmer', methods: ['POST'])]
    public function confirmerLivraison(Request $request, Commande $commande): Response
    {
        if ($this->isCsrfTokenValid('livraison'.$commande->getId(), $request->request->get('_token'))) {
            if ($commande->getStatut() === Commande::STATUT_EN_ATTENTE) {
                // Mise à jour du stock
                $stockPharmacie = $commande->getStockPharmacie();
                $stockPharmacie->setQuantite($stockPharmacie->getQuantite() + $commande->getQuantite());
                $stockPharmacie->updateStatu();
                
                // Mise à jour du statut de la commande
                $commande->setStatut(Commande::STATUT_LIVREE);
                
                $this->entityManager->flush();
                
                $this->addFlash('success', 'La livraison a été confirmée avec succès.');
            } else {
                $this->addFlash('error', 'Cette commande ne peut pas être livrée car elle n\'est pas en attente.');
            }
        }

        return $this->redirectToRoute('app_stock_pharmacie_livraisons');
    }

    #[Route('/livraison/{id}/annuler', name: 'app_stock_pharmacie_livraison_annuler', methods: ['POST'])]
    public function annulerLivraison(Request $request, Commande $commande): Response
    {
        if ($this->isCsrfTokenValid('annulation'.$commande->getId(), $request->request->get('_token'))) {
            if ($commande->getStatut() === Commande::STATUT_EN_ATTENTE) {
                $commande->setStatut(Commande::STATUT_ANNULEE);
                $this->entityManager->flush();
                $this->addFlash('success', 'La commande a été annulée.');
            }
        }
        
        return $this->redirectToRoute('app_stock_pharmacie_livraisons');
    }

    #[Route('/commande/produit/{id}', name: 'app_stock_pharmacie_commander', methods: ['GET', 'POST'])]
    public function commander(Request $request, StockPharmacie $stockPharmacie): Response
    {
        return $this->redirectToRoute('app_commande_new_with_product', ['id' => $stockPharmacie->getId()]);
    }

    #[Route('/{id}/edit', name: 'app_stock_pharmacie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StockPharmacie $stockPharmacie): Response
    {
        $form = $this->createForm(StockPharmacieType::class, $stockPharmacie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload de l'image
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->generateSafeFilename($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    
                    // Supprimer l'ancienne image si elle existe
                    if ($stockPharmacie->getImage()) {
                        $oldImagePath = $this->getParameter('images_directory').'/'.$stockPharmacie->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
                    
                    $stockPharmacie->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image');
                }
            }

            $stockPharmacie->updateStatu();
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Le produit a été modifié avec succès.');
            return $this->redirectToRoute('app_stock_pharmacie_index');
        }

        return $this->render('stock_pharmacie/edit.html.twig', [
            'stock_pharmacie' => $stockPharmacie,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'app_stock_pharmacie_delete', methods: ['POST'])]
    public function delete(Request $request, StockPharmacie $stockPharmacie): Response
    {
        if ($this->isCsrfTokenValid('delete' . $stockPharmacie->getId(), $request->request->get('_token'))) {
            $nomProduit = $stockPharmacie->getNom();
            $this->entityManager->remove($stockPharmacie);
            $this->entityManager->flush();
            
            $this->addFlash('success', "Le produit {$nomProduit} a été supprimé.");
        }

        return $this->redirectToRoute('app_stock_pharmacie_index');
    }

    #[Route('/{id}', name: 'app_stock_pharmacie_show', methods: ['GET'])]
    public function show(StockPharmacie $stockPharmacie): Response
    {
        return $this->render('stock_pharmacie/show.html.twig', [
            'stock_pharmacie' => $stockPharmacie
        ]);
    }
}
