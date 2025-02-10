<?php

namespace App\Controller;

use App\Entity\EntretientChambre;
use App\Form\EntretientChambreType;
use App\Repository\EntretientChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntretientChambreController extends AbstractController
{
    #[Route('/entretient_chambre', name: 'app_entretient_chambre')]
    public function index(EntretientChambreRepository $repository): Response
    {
        return $this->render('entretient_chambre/index.html.twig', [
            'entretients' => $repository->findAll(),
        ]);
    }

    #[Route('/entretient_chambre/nouveau', name: 'entretient_chambre.new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $entretient = new EntretientChambre();
        $form = $this->createForm(EntretientChambreType::class, $entretient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($entretient);
            $manager->flush();

            $this->addFlash('success', 'Entretien ajouté avec succès.');
            return $this->redirectToRoute('app_entretient_chambre');
        }

        return $this->render('entretient_chambre/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/entretient_chambre/edition/{id}', name: 'entretient_chambre.edit', methods: ['GET', 'POST'])]
    public function edit(EntretientChambre $entretient, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(EntretientChambreType::class, $entretient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();

            $this->addFlash('success', 'Entretien modifié avec succès.');
            return $this->redirectToRoute('app_entretient_chambre');
        }

        return $this->render('entretient_chambre/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/entretient_chambre/suppression/{id}', name: 'entretient_chambre.delete', methods: ['GET'])]
    public function delete(EntretientChambre $entretient, EntityManagerInterface $manager): Response
    {
        if (!$entretient) {
            $this->addFlash('danger', 'Entretien introuvable.');
            return $this->redirectToRoute('app_entretient_chambre');
        }

        $manager->remove($entretient);
        $manager->flush();

        $this->addFlash('success', 'Entretien supprimé avec succès.');
        return $this->redirectToRoute('app_entretient_chambre');
    }
}
