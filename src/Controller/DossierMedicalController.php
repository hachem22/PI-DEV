<?php

namespace App\Controller;

use App\Entity\DossierMedical;
use App\Form\DossierMedicalType;
use App\Repository\DossierMedicalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;




#[Route('/dossier/medical', name: 'app_dossier_medical_')]
class DossierMedicalController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        // Récupérer tous les dossiers médicaux
        $dossier_medicals = $dossierMedicalRepository->findAll();

        return $this->render('dossier_medical/ListeDossier.html.twig', [
            'dossier_medicals' => $dossier_medicals,
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
            return $this->redirectToRoute('app_dossier_medical_index');
        }

        return $this->render('dossier_medical/AjouterDossier.html.twig', [
            'form' => $form->createView(),
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
            return $this->redirectToRoute('app_dossier_medical_index');
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

        return $this->redirectToRoute('app_dossier_medical_index');
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
    #[Route('/{id}/visites', name: 'visites', methods: ['GET'])]
    public function visites(DossierMedical $dossierMedical): Response
    {
        // Récupérer les visites liées à ce dossier médical
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

}
