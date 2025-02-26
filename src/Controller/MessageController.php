<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Message;
use App\Form\MessageType;
use App\Entity\Utilisateur; // Corrected user entity
use App\Entity\Blog;

class MessageController extends AbstractController
{
    #[Route('/message/new/{blog_id}', name: 'app_message_new', methods: ['GET', 'POST'])]
    public function new(Request $request, int $blog_id, EntityManagerInterface $entityManager)
    {
        $blog = $entityManager->getRepository(Blog::class)->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Blog not found.');
        }

        $message = new Message();
        $message->setDateEnvoi(new \DateTime());
        $utilisateur = $this->getUser();

        if (!$utilisateur instanceof Utilisateur) {
            throw $this->createAccessDeniedException('You must be logged in to send a message.');
        }

        $message->setAuthor($utilisateur);
        $message->setBlog($blog);

        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('app_message_index');
        }

        return $this->render('message/new.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
            'blog' => $blog,
        ]);
    }


    #[Route('/message', name: 'app_message_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $messages = $entityManager->getRepository(Message::class)->findAll();

        return $this->render('message/index.html.twig', [
            'messages' => $messages,
        ]);
    }

    #[Route('/message/show/{author}', name: 'app_message_show', methods: ['GET'])]
    public function show(Utilisateur $author, EntityManagerInterface $entityManager): Response
    {
        $messages = $entityManager->getRepository(Message::class)->findBy(['author' => $author]);

        if (!$messages) {
            throw $this->createNotFoundException('No messages found for this author.');
        }

        return $this->render('message/show.html.twig', [
            'author' => $author,
            'messages' => $messages,
        ]);
    }

    #[Route('/message/edit/{id}', name: 'app_message_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser(); // Get logged-in user

        if (!$user instanceof Utilisateur) {
            throw $this->createAccessDeniedException('You must be logged in to edit messages.');
        }

        // Ensure the logged-in user is the author of the message
        if ($message->getAuthor() !== $user) {
            throw $this->createAccessDeniedException('You are not allowed to edit this message.');
        }

        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('message/edit.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }
}
