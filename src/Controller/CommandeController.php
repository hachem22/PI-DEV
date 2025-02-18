<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\StockPharmacie;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande', name: 'app_commande_')]
class CommandeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findBy([], ['dateCommande' => 'DESC'])
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    #[Route('/new/{id}', name: 'new_with_product', methods: ['GET', 'POST'])]
    public function new(Request $request, ?StockPharmacie $stockPharmacie = null): Response
    {
        $commande = new Commande();
        
        if ($stockPharmacie) {
            $commande->setStockPharmacie($stockPharmacie);
        }

        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commande->setDateCommande(new \DateTimeImmutable());
            $commande->setDateLivraison((new \DateTimeImmutable())->modify('+3 days'));
            $commande->setStatut(Commande::STATUT_EN_ATTENTE);
            
            $this->entityManager->persist($commande);
            $this->entityManager->flush();

            $this->addFlash('success', 'La commande a été créée avec succès.');
            return $this->redirectToRoute('app_commande_index');
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commande $commande): Response
    {
        if ($commande->isLivree()) {
            $this->addFlash('error', 'Une commande livrée ne peut pas être modifiée.');
            return $this->redirectToRoute('app_commande_index');
        }

        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'La commande a été modifiée avec succès.');
            return $this->redirectToRoute('app_commande_index');
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView()
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande): Response
    {
        if ($commande->isLivree()) {
            $this->addFlash('error', 'Une commande livrée ne peut pas être supprimée.');
            return $this->redirectToRoute('app_commande_index');
        }

        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($commande);
            $this->entityManager->flush();
            $this->addFlash('success', 'La commande a été supprimée.');
        }

        return $this->redirectToRoute('app_commande_index');
    }
}
