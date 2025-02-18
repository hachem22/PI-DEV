<?php

namespace App\Controller;

use App\Entity\Lit;
use App\Entity\Chambre;
use App\Form\LitType;
use App\Form\AffectationLitType;
use App\Repository\LitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Enum\LitStatut;

final class LitController extends AbstractController
{
    #[Route('/lit', name: 'app_lit')]
    public function index(LitRepository $repository): Response
    {
        return $this->render('lit/index.html.twig', [
            'lits' => $repository->findAll()
        ]);
    }

    #[Route('/lit/nouveau', name: 'lit.new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $lit = new Lit();
        $form = $this->createForm(LitType::class, $lit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chambre = $lit->getChambre();

            // Vérifier si la capacité de la chambre est atteinte
            if ($chambre->getLits()->count() >= $chambre->getCapacite()) {
                $this->addFlash('error', 'La capacité maximale de lits pour cette chambre est atteinte.');
                return $this->redirectToRoute('lit.new');
            }

            // Associer le lit à la chambre
            $lit->setChambre($chambre);

            $manager->persist($lit);
            $manager->flush();

            $this->addFlash('success', 'Le lit a été ajouté avec succès.');
            return $this->redirectToRoute('app_lit');
        }

        return $this->render('lit/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/lit/edition/{id}', name: 'lit.edit', methods: ['GET', 'POST'])]
    public function edit(Lit $lit, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(LitType::class, $lit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chambre = $lit->getChambre();

            // Vérifier si la capacité de la chambre est atteinte
            if ($chambre->getLits()->count() > $chambre->getCapacite()) {
                $this->addFlash('error', 'La capacité maximale de lits pour cette chambre est atteinte.');
                return $this->redirectToRoute('lit.edit', ['id' => $lit->getId()]);
            }

            $manager->flush();

            $this->addFlash('success', 'Le lit a été modifié avec succès.');
            return $this->redirectToRoute('app_lit');
        }

        return $this->render('lit/edit.html.twig', [
            'form' => $form->createView(),
            'lit' => $lit,
        ]);
    }

    #[Route('/lit/suppression/{id}', name: 'lit.delete', methods: ['GET'])]
    public function delete(Lit $lit, EntityManagerInterface $manager): Response
    {
        if (!$lit) {
            $this->addFlash('error', 'Le lit n\'a pas été trouvé.');
            return $this->redirectToRoute('app_lit');
        }

        // Supprimer le lit de la chambre associée
        $chambre = $lit->getChambre();
        $chambre->removeLit($lit);

        $manager->remove($lit);
        $manager->flush();

        $this->addFlash('success', 'Le lit a été supprimé avec succès.');
        return $this->redirectToRoute('app_lit');
    }

    #[Route('/lit/{id}/chambre', name: 'lit.chambre', methods: ['GET'])]
    public function showChambre(Lit $lit): Response
    {
        $chambre = $lit->getChambre();

        return $this->render('lit/index.html.twig', [
            'lit' => $lit,
            'chambre' => $chambre,
        ]);
    }
    #[Route('/lit/affectation/{id}', name: 'lit.affecter', methods: ['GET', 'POST'])]
public function affecterLit(Lit $lit, Request $request, EntityManagerInterface $manager): Response
{
    $form = $this->createForm(AffectationLitType::class, $lit);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $patient = $lit->getPatient();

        // Vérifier et mettre à jour le statut du lit
        if ($patient) {
            $lit->setType('occupe');  // 'occupe' comme chaîne de caractères
        } else {
            $lit->setType('libre');   // 'libre' comme chaîne de caractères
        }

        $manager->flush();

        $this->addFlash('success', 'Le lit a été mis à jour avec succès.');
        return $this->redirectToRoute('app_lit');
    }

    return $this->render('lit/affectation.html.twig', [
        'form' => $form->createView(),
        'lit' => $lit,
    ]);
}

    public function show(LitRepository $repository): Response
{
    return $this->render('lit/index.html.twig', [
        'lits' => $repository->findAll(),
        'typeLitLibre' => 'libre',   // Passer la chaîne 'libre'
        'typeLitOccupe' => 'occupe', // Passer la chaîne 'occupe'
    ]);
}

}