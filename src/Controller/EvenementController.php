<?php
namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Formation;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

#[Route('/evenement')]
class EvenementController extends AbstractController
{
    // Affiche la liste des événements
    #[Route('/', name: 'evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'evenement_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, LoggerInterface $logger): Response
{
    $evenement = new Evenement();
    $form = $this->createForm(EvenementType::class, $evenement);
    $form->handleRequest($request);

    $logger->info('Formulaire soumis: ' . ($form->isSubmitted() ? 'Oui' : 'Non'));

    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            $logger->info('Formulaire valide, traitement en cours.');

            // Récupérer les formations sélectionnées
            $formationsIds = $request->get('formations', []); 
            foreach ($formationsIds as $formationId) {
                $formation = $entityManager->getRepository(Formation::class)->find($formationId);
                if ($formation) {
                    $formation->setEvenement($evenement);
                    $entityManager->persist($formation);
                    $logger->info('Formation associée: ' . $formation->getNom());
                } else {
                    $logger->warning('Formation non trouvée: ' . $formationId);
                }
            }

            $entityManager->persist($evenement);
            $entityManager->flush();

            $logger->info('Événement ajouté avec succès: ' . $evenement->getNom());

            return $this->redirectToRoute('evenement_index');
        } else {
            $logger->error('Le formulaire est invalide');
        }
    }

    return $this->render('admin/new.html.twig', [
        'evenement' => $evenement,
        'form' => $form->createView(),
        'formations' => $entityManager->getRepository(Formation::class)->findAll()
    ]);
}

    // Affiche les détails d'un événement
    #[Route('/{id}', name: 'evenement_show', methods: ['GET'], requirements: ['id' => '\d+'])]

    //#[Route('/{id}', name: 'evenement_show', methods: ['GET'])]
    public function show(EvenementRepository $evenementRepository, int $id): Response
{
    $evenement = $evenementRepository->find($id);

    if (!$evenement) {
        throw new NotFoundHttpException('Événement non trouvé');
    }

    return $this->render('admin/show.html.twig', [
        'evenement' => $evenement,
    ]);
}


    // Édite un événement existant
    #[Route('/{id}/edit', name: 'evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index');
        }

        return $this->render('admin/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
            'formations' => $entityManager->getRepository(Formation::class)->findAll(),
        ]);
    }

    // Supprime un événement
    #[Route('/{id}', name: 'evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('evenement_index');
    }
}
