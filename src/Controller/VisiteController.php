<?php

namespace App\Controller;

use App\Entity\Visite;
use App\Entity\DossierMedical;
use App\Form\VisiteType;
use App\Repository\VisiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/visite')]
class VisiteController extends AbstractController
{
   // La route pour afficher les visites d'un dossier médical donné
#[Route('/{dossierId}', name: 'visite_index', methods: ['GET'])]
public function index(int $dossierId, VisiteRepository $visiteRepository): Response
{
    // Récupérer les visites associées au dossier médical
    $visites = $visiteRepository->findBy(['dossierMedical' => $dossierId]);

    return $this->render('visite/index.html.twig', [
        'visites' => $visites,
        'dossierId' => $dossierId,
    ]);
}


    #[Route('/ajouter/{dossierId}', name: 'visite_ajouter', methods: ['GET', 'POST'])]
    public function ajouter(Request $request, int $dossierId, EntityManagerInterface $entityManager): Response
    {
        $dossierMedical = $entityManager->getRepository(DossierMedical::class)->find($dossierId);

        if (!$dossierMedical) {
            throw $this->createNotFoundException('Dossier médical introuvable');
        }

        $visite = new Visite();
        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $visite->setDossierMedical($dossierMedical);
            $entityManager->persist($visite);
            $entityManager->flush();

            return $this->redirectToRoute('visite_index', ['dossierId' => $dossierId]);
        }

        return $this->render('visite/AjouterVisite.html.twig', [
            'form' => $form->createView(),
            'dossierId' => $dossierId,
        ]);
    }

    #[Route('/modifier/{id}/{dossierId}', name: 'visite_modifier', methods: ['GET', 'POST'])]
    public function modifier(Request $request, Visite $visite, int $dossierId, EntityManagerInterface $entityManager): Response
    {
        if ($visite->getDossierMedical()->getId() !== $dossierId) {
            throw $this->createNotFoundException('Cette visite ne fait pas partie de ce dossier médical');
        }

        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('visite_index', ['dossierId' => $dossierId]);
        }

        return $this->render('visite/ajouter.html.twig', [
            'form' => $form->createView(),
            'dossierId' => $dossierId,
        ]);
    }

    #[Route('/supprimer/{id}/{dossierId}', name: 'visite_supprimer', methods: ['POST'])]
    public function supprimer(Request $request, Visite $visite, int $dossierId, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $visite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($visite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('visite_index', ['dossierId' => $dossierId]);
    }

    #[Route('/telecharger-diagnostic/{id}', name: 'visite_telecharger_diagnostic', methods: ['GET'])]
    public function telechargerDiagnostic(Visite $visite): Response
    {
        return $this->genererPdf($visite->getDiagnostic(), 'diagnostic.pdf');
    }

    #[Route('/telecharger-ordonnance/{id}', name: 'visite_telecharger_ordonnance', methods: ['GET'])]
    public function telechargerOrdonnance(Visite $visite): Response
    {
        return $this->genererPdf($visite->getOrdonnace(), 'ordonnance.pdf');
    }

    #[Route('/telecharger-certificat/{id}', name: 'visite_telecharger_certificat', methods: ['GET'])]
    public function telechargerCertificat(Visite $visite): Response
    {
        return $this->genererPdf($visite->getCeteficat(), 'certificat.pdf');
    }

    private function genererPdf(string $contenu, string $nomFichier): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        $html = $this->renderView('visite/pdf_template.html.twig', [
            'contenu' => $contenu,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $nomFichier . '"',
            ]
        );
    }
}
