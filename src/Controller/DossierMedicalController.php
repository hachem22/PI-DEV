<?php

namespace App\Controller;

use App\Entity\DossierMedical;
use App\Entity\Visite;
use App\Form\DossierMedicalType;
use App\Form\VisiteType;
use App\Repository\DossierMedicalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;




#[Route('/dossier/medical')]
class DossierMedicalController extends AbstractController
{
    #[Route('/dossier/medical/{id}/visites', name: 'visite_index', methods: ['GET'])]
    public function index(DossierMedical $dossierMedical): Response
{
    // Vous récupérez toutes les visites liées à ce dossier médical.
    $visites = $dossierMedical->getVisites();
    
    return $this->render('dossier_medical/visites.html.twig', [
        'dossierMedical' => $dossierMedical,  // Vous passez l'objet dossierMedical à la vue
        'visites' => $visites,  // Vous passez les visites à la vue
    ]);
}
    #[Route('Mon_Dossiermedical/', name: 'Mon_dossier_medical')]
    public function indexx(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        // Récupérer tous les dossiers médicaux
        $dossier_medicals = $dossierMedicalRepository->findAll();

        return $this->render('patient/dossierMedical.html.twig', [
            'dossier_medicals' => $dossier_medicals,
        ]);
    }
    #[Route('GererDossier/', name: 'GererDossier')]
    public function GererDossier(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        // Récupérer tous les dossiers médicaux
        $dossier_medicals = $dossierMedicalRepository->findAll();

        return $this->render('medecin/gerer_dossier_medical.html.twig', [
            'dossier_medicals' => $dossier_medicals,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dossierMedical = new DossierMedical();
        $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($dossierMedical);
            $entityManager->flush();

            $this->addFlash('success', 'Dossier médical créé avec succès !');
            return $this->redirectToRoute('index');
        }

        return $this->render('dossier_medical/AjouterDossier.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/edit/{id}', name: 'editDossier', methods: ['GET', 'POST'])]
public function editDossier(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
{
    // Create the form for editing the DossierMedical
    $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
    $form->handleRequest($request);

    // Handle form submission
    if ($form->isSubmitted() && $form->isValid()) {
        // Save the updated DossierMedical to the database
        $entityManager->flush();

        // Add a success flash message
        $this->addFlash('success', 'Dossier médical mis à jour avec succès !');

        // Redirect to the index page or another appropriate route
        return $this->redirectToRoute('index');
    }

    // Render the edit template with the form
    return $this->render('dossier_medical/ModifierDossier.html.twig', [
        'form' => $form->createView(),
        'dossierMedical' => $dossierMedical, // Pass the DossierMedical object to the template
    ]);
}

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Dossier médical mis à jour avec succès !');
            return $this->redirectToRoute('index');
        }

        return $this->render('dossier_medical/ModifierDossier.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $dossierMedical->getId(), $request->request->get('_token'))) {
            $entityManager->remove($dossierMedical);
            $entityManager->flush();

            $this->addFlash('success', 'Dossier médical supprimé avec succès !');
        } else {
            $this->addFlash('error', 'Token CSRF invalide, suppression annulée.');
        }

        return $this->redirectToRoute('index');
    }

    #[Route('/dossier-medical/{id}/telecharger-pdf', name: 'telecharger_pdf_dossier_medical')]
    public function telechargerPdf(DossierMedicalRepository $dossierMedicalRepository, int $id): Response
    {
        // Récupérer le dossier médical
        $dossier = $dossierMedicalRepository->find($id);

        if (!$dossier) {
            throw $this->createNotFoundException('Dossier médical non trouvé');
        }

        // Configuration de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);  // Activer le parser HTML5
        $options->set('isPhpEnabled', true);          // Activer les fonctions PHP dans le PDF
        $dompdf = new Dompdf($options);

        // Création du contenu HTML pour le PDF
        $html = $this->renderView('dossier_medical/pdf_dossier.html.twig', [
            'dossier' => $dossier
        ]);

        // Charger le contenu HTML dans Dompdf
        $dompdf->loadHtml($html);

        // Définir la taille du papier (A4, portrait)
        $dompdf->setPaper('A4', 'portrait');

        // Rendre le PDF
        $dompdf->render();

        // Télécharger le PDF
        $output = $dompdf->output();
        return new Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="dossier_medical_' . $dossier->getId() . '.pdf"',
        ]);
    }
    #[Route('/{id}/visites', name: 'MesVisite', methods: ['GET'])]
public function visites(DossierMedical $dossierMedical): Response
{
    $visites = $dossierMedical->getVisites();

    return $this->render('dossier_medical/visites.html.twig', [
        'dossierMedical' => $dossierMedical,
        'visites' => $visites,
    ]);
}
    #[Route('/dossier-medical/{id}', name: 'consulter', methods: ['GET'])]
    public function consulter(DossierMedical $dossierMedical): Response
    {
        return $this->render('patient/consulterDossier.html.twig', [
            'dossierMedical' => $dossierMedical,
        ]);
    }
    #[Route('/newVisite/{id}', name: 'ajouter_visite', methods: ['GET', 'POST'])]
    public function newVisite(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        $visite = new Visite();
        $visite->setDossierMedical($dossierMedical);

        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($visite);
            $entityManager->flush();

            $this->addFlash('success', 'Visite ajoutée avec succès!');
            return $this->redirectToRoute('MesVisite', ['id' => $dossierMedical->getId()]);
        }

        return $this->render('visite/AjouterVisite.html.twig', [
            'form' => $form->createView(),
            'dossierMedical' => $dossierMedical,
        ]);
    }
    #[Route('/visite/{id}', name: 'visiteConsulter', methods: ['GET'])]
public function consulterVisite(Visite $visite): Response
{
    return $this->render('visite/consulter.html.twig', [
        'visite' => $visite,
    ]);
}
    #[Route('/visite/{dossierId}/{id}/modifier', name: 'visite_modifier', methods: ['GET', 'POST'])]
    public function modifier(Request $request, Visite $visite, int $dossierId, EntityManagerInterface $entityManager): Response
    {
        // Ensure the visit belongs to the correct medical record
        if ($visite->getDossierMedical()->getId() !== $dossierId) {
            throw $this->createNotFoundException('This visit does not belong to the specified medical record.');
        }
    
        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Visit successfully updated.');
            
            return $this->redirectToRoute('visite_index', ['dossierId' => $dossierId]);
        }
    
        return $this->render('visite/modifier.html.twig', [
            'form' => $form->createView(),
            'visite' => $visite,
            'dossierId' => $dossierId, // Pass dossierId to the template
        ]);
    }
    
#[Route('/visite/{id}/supprimer', name: 'visite_supprimer', methods: ['POST'])]
public function supprimer(Request $request, Visite $visite, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$visite->getId(), $request->request->get('_token'))) {
        $entityManager->remove($visite);
        $entityManager->flush();
        $this->addFlash('success', 'Visite supprimée avec succès.');
    }

    return $this->redirectToRoute('visite_index');
}
}
