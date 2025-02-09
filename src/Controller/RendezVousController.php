<?php

// RendezVousController.php
namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Form\MedecinRendezVousType;

use App\Repository\ServiceRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Enum\RendezVousStatus;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\RendezVousRepository;

use Symfony\Component\Routing\Annotation\Route;

class RendezVousController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/demande-rendezvous', name: 'demande_rendezvous')]
    public function demandeRendezVous(Request $request, UtilisateurRepository $utilisateurRepository, ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findAll();
    
        if (empty($services)) {
            $this->addFlash('warning', 'Aucun service disponible pour le moment.');
            return $this->redirectToRoute('demande_rendezvous');
        }
    
        $rendezVous = new RendezVous();
        $rendezVous->setRendezVousStatus('EnAttente');
        // Ne pas définir le statut ici, il sera géré par défaut dans l'entité
    
        $form = $this->createForm(RendezVousType::class, $rendezVous, [
            'services' => $services,
        ]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($rendezVous);
            $this->entityManager->flush();
            $this->addFlash('success', 'Rendez-vous demandé avec succès !');
            return $this->redirectToRoute('demande_rendezvous');
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }
    
        return $this->render('patient/demande.html.twig', [
            'form' => $form->createView(),
        ]);
    }  
   
    #[Route('/gere-rendezvous', name: 'gere_rendezvous')]
    public function gereRendezVous(RendezVousRepository $rendezVousRepository): Response
    {
        // Récupérer tous les rendez-vous
        $rendezVousList = $rendezVousRepository->findAll();

        return $this->render('medecin/GereRendezVous.html.twig', [
            'rendezVousList' => $rendezVousList, // Passer les rendez-vous à la vue
        ]);
    }
    #[Route('/ListRdv', name: 'ListRendezVous')]
    public function ListeRendezVous(RendezVousRepository $rendezVousRepository): Response
    {
        // Récupérer tous les rendez-vous
        $rendezVousList = $rendezVousRepository->findAll();

        return $this->render('patient/ListeRendezVous.html.twig', [
            'rendezVousList' => $rendezVousList, // Passer les rendez-vous à la vue
        ]);
    }

    #[Route('/supprimer-rendezvous/{id}', name: 'supprimer_rendezvous', methods: ['POST'])]
    public function supprimerRendezVous(int $id, RendezVousRepository $rendezVousRepository): Response
    {
        // Récupérer le rendez-vous à supprimer
        $rendezVous = $rendezVousRepository->find($id);

        if ($rendezVous) {
            // Supprimer le rendez-vous
            $this->entityManager->remove($rendezVous);
            $this->entityManager->flush();
            $this->addFlash('success', 'Rendez-vous supprimé avec succès !');
        } else {
            $this->addFlash('error', 'Rendez-vous non trouvé.');
        }

        return $this->redirectToRoute('gere_rendezvous');
    }
    #[Route('/modifier-rendezvous/{id}', name: 'modifier_rendezvous', methods: ['GET', 'POST'])]
public function modifierRendezVous(Request $request, RendezVous $rendezVous, ServiceRepository $serviceRepository, EntityManagerInterface $entityManager): Response
{
    $services = $serviceRepository->findAll();

    $form = $this->createForm(MedecinRendezVousType::class, $rendezVous, [
        'services' => $services,
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        $this->addFlash('success', 'Rendez-vous modifié avec succès !');
        return $this->redirectToRoute('gere_rendezvous');
    }

    return $this->render('medecin/modifierRendezVous.html.twig', [
        'form' => $form->createView(),
        'rendezVous' => $rendezVous,
    ]);
}

  #[Route('/rendezvous/accepter/{id}', name:'accepter_rendezvous', methods:['POST'])]

  public function accepterRendezVous(int $id, RendezVousRepository $rendezVousRepository, EntityManagerInterface $entityManager): Response
{
    $rendezVous = $rendezVousRepository->find($id);
    if ($rendezVous) {
        $rendezVous->setRendezVousStatus('Confirme'); // Statut "Confirmé" pour accepter
        $entityManager->flush();
    }
    return $this->redirectToRoute('gere_rendezvous'); // Redirige vers la page des rendez-vous
}


#[Route('/rendezvous/refuser/{id}', name:'refuser_rendezvous', methods:['POST'])]

public function refuserRendezVous(int $id, RendezVousRepository $rendezVousRepository, EntityManagerInterface $entityManager): Response
{
    $rendezVous = $rendezVousRepository->find($id);
    if ($rendezVous) {
        $rendezVous->setRendezVousStatus('Annule');
        $entityManager->flush();
    }
    return $this->redirectToRoute('gere_rendezvous');

}

}
