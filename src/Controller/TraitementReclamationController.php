<?php

namespace App\Controller;

use App\Entity\TraitementReclamation;
use App\Entity\Reclamation;
use App\Form\TraitementReclamationType;
use App\Repository\TraitementReclamationRepository;
use App\Enum\ReclamationStatut;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/traitement')]
class TraitementReclamationController extends AbstractController
{
    #[Route('/new/{id}', name: 'app_traitement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        if (!$reclamation) {
            throw $this->createNotFoundException("Réclamation introuvable !");
        }

        $traitement = new TraitementReclamation();
        $traitement->setReclamation($reclamation);
        $traitement->setDateTraitement(new \DateTime());
        $traitement->setEtat(ReclamationStatut::fromString('En cours'));

        $form = $this->createForm(TraitementReclamationType::class, $traitement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($traitement);

            // Mise à jour de l'état de la réclamation
            if ($traitement->getEtat()->value === 'Terminé') {
                $reclamation->setStatut(ReclamationStatut::fromString('résolue'));
            }

            $em->flush();

            $this->addFlash('success', 'Traitement ajouté avec succès.');
            return $this->redirectToRoute('app_traitement_index');
        }

        return $this->render('traitement_reclamation/new.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation
        ]);
    }

    #[Route('/', name: 'app_traitement_index')]
    public function index(TraitementReclamationRepository $repo, EntityManagerInterface $em): Response
    {
        // Récupérer la réclamation associée au premier traitement trouvé
        $traitements = $repo->findAll();
        $reclamation = null;
        if (!empty($traitements)) {
            $reclamation = $traitements[0]->getReclamation();
        }
    
        return $this->render('traitement_reclamation/index.html.twig', [
            'traitements' => $traitements,
            'reclamation' => $reclamation,
        ]);
    }
    
    #[Route('/edit/{id}', name: 'app_traitement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TraitementReclamation $traitement, EntityManagerInterface $em): Response
    {
        // Récupérer la réclamation associée
        $reclamation = $traitement->getReclamation(); // Assurez-vous que cette relation existe dans l'entité
    
        $form = $this->createForm(TraitementReclamationType::class, $traitement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Traitement modifié avec succès.');
            return $this->redirectToRoute('app_traitement_index');
        }
    
        return $this->render('traitement_reclamation/edit.html.twig', [
            'form' => $form->createView(),
            'traitement' => $traitement,
            'reclamation' => $reclamation, // ✅ Maintenant bien défini
        ]);
    }
    
    #[Route('/delete/{id}', name: 'app_traitement_delete', methods: ['POST'])]
    public function delete(Request $request, TraitementReclamation $traitement, EntityManagerInterface $em): Response
    {
        if (!$traitement) {
            throw $this->createNotFoundException("Traitement introuvable !");
        }

        if ($this->isCsrfTokenValid('delete'.$traitement->getId(), $request->request->get('_token'))) {
            $em->remove($traitement);
            $em->flush();
            $this->addFlash('success', 'Traitement supprimé avec succès.');
        } else {
            $this->addFlash('danger', 'Échec de la suppression du traitement.');
        }

        return $this->redirectToRoute('app_traitement_index');
    }
    #[Route('/traitement/{id}', name: 'app_traitement_show', methods: ['GET'])]
public function show(TraitementReclamation $traitement): Response
{
    $reclamation = $traitement->getReclamation();
    return $this->render('traitement_reclamation/show.html.twig', [
        'traitement' => $traitement,
        'reclamation' => $reclamation,
    ]);
}

}
