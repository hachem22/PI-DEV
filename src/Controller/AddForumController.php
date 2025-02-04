<?php

namespace App\Controller;

use App\Entity\Forum; // Si tu as une entité Forum
use App\Form\ForumType; // Si tu as un formulaire de création de forum
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddForumController extends AbstractController
{
    /**
     * @Route("/forums", name="forum_index") hh
     */
    public function index(): Response
    {
        // Récupérer tous les forums depuis la base de données
        $forums = $this->getDoctrine()->getRepository(Forum::class)->findAll();

        // Retourner une vue avec la liste des forums
        return $this->render('forum/index.html.twig', [
            'forums' => $forums,
        ]);
    }

    /**
     * @Route("/forum/ajouter", name="forum_ajouter")
     */
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $forum = new Forum();

        // Créer un formulaire pour ajouter un forum
        $form = $this->createForm(ForumType::class, $forum);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder le forum en base de données
            $em->persist($forum);
            $em->flush();

            // Rediriger après la soumission du formulaire
            return $this->redirectToRoute('forum_index');
        }

        return $this->render('forum/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}