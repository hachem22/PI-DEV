<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\EntretientChambre;
use App\Enum\Activechambre;
use App\Form\ChambreType;
use App\Form\EntretientChambreType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ChambreController extends AbstractController
{
    #[Route('/chambre', name: 'app_chambre')]
    public function index(ChambreRepository $repository): Response
    {
        return $this->render('chambre/index.html.twig', [
            'chambres' => $repository->findAll()
        ]);
    }

    #[Route('/chambre/nouveau', name: 'chambre.new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager, ChambreRepository $repository): Response
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérification de l'unicité du numéro de chambre
            if ($repository->findOneBy(['num' => $chambre->getNum()])) {
                $this->addFlash('danger', 'Ce numéro de chambre existe déjà.');
            } else {
                $manager->persist($chambre);
                $manager->flush();
                $this->addFlash('success', 'Chambre ajoutée avec succès.');
                return $this->redirectToRoute('app_chambre');
            }
        }

        return $this->render('chambre/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/chambre/edition/{id}', name: 'chambre.edit', methods: ['GET', 'POST'])]
    public function edit(Chambre $chambre, Request $request, EntityManagerInterface $manager, ChambreRepository $repository): Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérification de l'unicité du numéro de chambre sauf pour elle-même
            $existingChambre = $repository->findOneBy(['num' => $chambre->getNum()]);
            if ($existingChambre && $existingChambre !== $chambre) {
                $this->addFlash('danger', 'Ce numéro de chambre est déjà utilisé.');
            } else {
                $manager->flush();
                $this->addFlash('success', 'Chambre modifiée avec succès.');
                return $this->redirectToRoute('app_chambre');
            }
        }

        return $this->render('chambre/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/chambre/suppression/{id}', name: 'chambre.supprimer', methods: ['GET'])]
    public function delete(EntityManagerInterface $manager, Chambre $chambre): Response
    {
        if (!$chambre) {
            $this->addFlash('danger', 'Chambre non trouvée.');
            return $this->redirectToRoute('app_chambre');
        }

        // Suppression des entretiens liés
        foreach ($chambre->getEntretient() as $entretient) {
            $manager->remove($entretient);
        }

        $manager->remove($chambre);
        $manager->flush();

        $this->addFlash('success', 'Chambre supprimée avec succès.');
        return $this->redirectToRoute('app_chambre');
    


    }
    #[Route('/chambre/{id}/entretients', name: 'chambre.entretients')]
public function showEntretients(Chambre $chambre): Response
{
    $entretients = $chambre->getEntretient();

    return $this->render('entretient_chambre/index.html.twig', [
        'chambre' => $chambre,
        'entretients' => $entretients,
    ]);
}
#[Route('/chambre/{id}/entretient/new', name: 'chambre.entretient.new', methods: ['GET', 'POST'])]
public function addEntretient(
    Chambre $chambre,
    Request $request,
    EntityManagerInterface $manager
): Response {
    $entretient = new EntretientChambre();
    $form = $this->createForm(EntretientChambreType::class, $entretient);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entretient->setChambre($chambre);

        // Mise à jour du statut de la chambre pendant l'entretien
        $chambre->setActive('occupee');
        $manager->persist($entretient);
        $manager->persist($chambre);
        $manager->flush();

        // Planification de remise à "disponible" après la date de fin
        $dateFin = $entretient->getDateFin();
        if ($dateFin) {
            $this->planifierStatutDisponible($chambre, $dateFin, $manager);
        }

        $this->addFlash('success', 'Entretien ajouté et chambre mise à jour.');
        return $this->redirectToRoute('app_chambre');
    }

    return $this->render('entretient/new.html.twig', [
        'form' => $form->createView(),
        'chambre' => $chambre
    ]);
}

private function planifierStatutDisponible(Chambre $chambre, \DateTime $dateFin, EntityManagerInterface $manager)
{
    $delay = $dateFin->getTimestamp() - time();

    if ($delay > 0) {
        // Tâche différée pour remettre la chambre à "disponible"
        sleep($delay);  // Remplacez par une file de tâches (RabbitMQ, Symfony Messenger)
        $chambre->setActive('disponible');
        $manager->flush();
    }
}
#[Route('/chambre/{id}/visualisation', name: 'chambre.visualisation')]
public function visualisation(Chambre $chambre): Response
{   $lits = $chambre->getLits()->toArray();
    $litsArray = array_map(fn($lit) => [
        'id' => $lit->getId(),
        'positionX' => rand(0, 4),  // Example: generate or retrieve the positions
        'positionZ' => rand(-4, 0),
        'status' => $lit->getType()// Assuming 'getType' returns an object and you want a label or value
    ], $lits);
    return $this->render('chambre/visualisation.html.twig', [
        'chambre' => $chambre,
        'lits' => $litsArray
    ]);
}
#[Route('/chambre/{id}/lits', name: 'chambre.lits')]
public function showLits(Chambre $chambre): Response
{
    $lits = $chambre->getLits();

    return $this->render('lit/index.html.twig', [
        'chambre' => $chambre,
        'lits' => $lits,
    ]);
}
#[Route('/chambre/{id}/service', name: 'chambre.service', methods: ['GET'])]
    public function showChambre(Chambre $chambre): Response
    {
        $service = $chambre->getPosition();

        return $this->render('chambre/index.html.twig', [
            
            'chambre' => $chambre,
            'service' => $service,
        ]);
    }


}
