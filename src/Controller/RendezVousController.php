<?php

// RendezVousController.php
namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Form\MedecinRendezVousType;
use App\Form\HeureRendezVousType;

use App\Entity\Planning;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Repository\ServiceRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\PlanningRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Enum\RendezVousStatus;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\RendezVousRepository;
use App\Form\HeureType;

use Symfony\Component\Routing\Annotation\Route;

class RendezVousController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/HomePatient', name: 'Home_Patient')]
    public function HomePatient(): Response
{
    return $this->render('patient/homepatient.html.twig', [
       
    ]);
}
#[Route('/HomeMedecin', name: 'Home_Medecin')]
public function HomeMedecin(): Response
{
return $this->render('medecin/HomeMedecin.html.twig', [
   
]);
}
    #[Route('/demande-rendezvous', name: 'demande_rendezvous')]
    public function demandeRendezVous(
        Request $request,
        ServiceRepository $serviceRepository,
        UtilisateurRepository $utilisateurRepository,
        PlanningRepository $planningRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Récupérer tous les services
        $services = $serviceRepository->findAll();

        if (empty($services)) {
            $this->addFlash('warning', 'Aucun service disponible pour le moment.');
            return $this->render('patient/demande.html.twig', [
                'form' => null,
            ]);
        }

        // Créer une nouvelle instance de RendezVous
        $rendezVous = new RendezVous();
        $rendezVous->setRendezVousStatus('EnAttente');

        // Récupérer les dates disponibles
        $datesDisponibles = [];
        foreach ($planningRepository->findAll() as $planning) {
            $datesDisponibles[] = $planning->getDateDisponible();
        }

        // Créer le formulaire
        $form = $this->createForm(RendezVousType::class, $rendezVous, [
            'services' => $services,
            'datesDisponibles' => $datesDisponibles,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer la date sélectionnée
            $dateSelectionnee = $form->get('date')->getData();

            // Vérifier si une date a été sélectionnée
            if (!$dateSelectionnee) {
                $this->addFlash('error', 'Veuillez sélectionner une date.');
                return $this->render('patient/demande.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            // Trouver le Planning correspondant à la date sélectionnée
            $planning = $planningRepository->findOneBy(['dateDisponible' => $dateSelectionnee]);

            if (!$planning) {
                $this->addFlash('error', 'Aucun planning trouvé pour la date sélectionnée.');
                return $this->render('patient/demande.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            // Associer le Planning au RendezVous
            $rendezVous->setPlanning($planning);
            // Définir les autres propriétés
            $rendezVous->setMedecin($form->get('medecin')->getData());
            $rendezVous->setService($form->get('service')->getData());

            // Enregistrer le rendez-vous en base de données (sans l'heure pour l'instant)
            $entityManager->persist($rendezVous);
            $entityManager->flush();

            // Rediriger vers la page de sélection de l'heure
            return $this->redirectToRoute('selectionner_heure', ['id' => $rendezVous->getId()]);
        }

        // Afficher le formulaire
        return $this->render('patient/demande.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/selectionner-heure/{id}', name: 'selectionner_heure')]
    public function selectionnerHeure(RendezVous $rendezVous, Request $request, PlanningRepository $planningRepository, EntityManagerInterface $entityManager): Response
    {
        $medecin = $rendezVous->getMedecin();
        $date = $rendezVous->getDate();

        $planning = $planningRepository->findOneBy([
            'medecin' => $medecin,
            'dateDisponible' => $date,
        ]);

        $initialTimes = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00'];
        $reservedTimes = $planning ? $planning->getTempsReserver() : [];
        $availableTimes = array_diff($initialTimes, is_array($reservedTimes) ? $reservedTimes : []);

        $form = $this->createForm(HeureRendezVousType::class, null, [
            'heuresDisponibles' => $availableTimes,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $heureSelectionnee = $form->get('heure_selectionnee')->getData();
            $rendezVous->setHeure($heureSelectionnee);
            
            $entityManager->persist($rendezVous);
            $entityManager->flush();

            return $this->redirectToRoute('valider_heure', ['id' => $rendezVous->getId()]);
        }

        return $this->render('patient/select_heure.html.twig', [
            'form' => $form->createView(),
            'rendezVous' => $rendezVous,
        ]);
    }

    #[Route('/valider-heure/{id}', name: 'valider_heure')]
    public function validerHeure(Request $request, RendezVous $rendezVous, PlanningRepository $planningRepository, EntityManagerInterface $entityManager): Response
    {
        $heureSelectionnee = $request->request->get('heure_selectionnee');

        if (!$heureSelectionnee) {
            $this->addFlash('error', 'Veuillez sélectionner une heure.');
            return $this->redirectToRoute('selectionner_heure', ['id' => $rendezVous->getId()]);
        }

        $rendezVous->setHeure($heureSelectionnee);
        $entityManager->persist($rendezVous);

        $medecin = $rendezVous->getMedecin();
        $date = $rendezVous->getDate();
        $planning = $planningRepository->findOneBy([
            'medecin' => $medecin,
            'dateDisponible' => $date,
        ]);

        if ($planning) {
            $planning->ajouterTempsReserver($heureSelectionnee);
            $entityManager->persist($planning);
        }

        $entityManager->flush();

        $this->addFlash('success', 'Rendez-vous enregistré avec succès.');

        return $this->redirectToRoute('gere_rendezvous');
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

   
}