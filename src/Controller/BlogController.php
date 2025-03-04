<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\MessageType;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Service\SentimentAnalysisService;
use App\Entity\Message;


#[Route('/blog')]
final class BlogController extends AbstractController
{
    #[Route(name: 'app_blog_index', methods: ['GET'])]
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('blog/index.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'app_blog_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SentimentAnalysisService $sentimentAnalysisService): Response
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $sentiment = $sentimentAnalysisService->analyze($blog->getContent());
            $blog->setSentiment($sentiment);

            $entityManager->persist($blog);
            $entityManager->flush();

            return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/show', name: 'app_blog_show', methods: ['GET'])]
    public function show(Blog $blog): Response
    {
        return $this->render('blog/show.html.twig', [
            'blog' => $blog,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_blog_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Blog $blog, EntityManagerInterface $entityManager, SentimentAnalysisService $sentimentAnalysisService): Response
    {
        // Si l'auteur du blog est un proxy, l'initialiser
        $author = $blog->getAuthor();
        if ($author instanceof \Doctrine\ORM\Proxy\Proxy) {
            $author->__load(); // Charge complètement l'entité
        }

        // Accédez maintenant à la propriété nom
        $nom = $author->getUsername();

        // Continuer le traitement du formulaire
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Analyse du sentiment du contenu du blog
            $sentiment = $sentimentAnalysisService->analyze($blog->getContent());
            $blog->setSentiment($sentiment); // Supposons que vous avez une méthode setSentiment dans votre entité Blog


            $entityManager->flush();
            return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blog/edit.html.twig', [
            'blog' => $blog,
            'form' => $form,
            'authorName' => $nom, // Passer le nom à la vue si nécessaire
        ]);
    }



    #[Route('/{id}/delete', name: 'app_blog_delete', methods: ['POST'])]
    public function delete(Request $request, Blog $blog, EntityManagerInterface $entityManager): Response
    {
        // Check CSRF token for security
        if ($this->isCsrfTokenValid('delete' . $blog->getId(), $request->request->get('_token'))) {
            // Permanently delete the blog
            $entityManager->remove($blog);
            $entityManager->flush();
        }

        // Redirect to the blog list after deletion
        return $this->redirectToRoute('app_blog_index');
    }
    #[Route('/blog/{id}/message', name: 'app_blog_message')]
    public function message(Blog $blog, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Create a new message
        $message = new Message();
        $message->setAuthor($blog->getAuthor()); // Set the author of the message

        // Create the form
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Save the message
            $entityManager->persist($message);
            $entityManager->flush();

            // Add a success message
            $this->addFlash('success', 'Your message has been sent!');

            // Redirect to the blog post
            return $this->redirectToRoute('app_blog_show', ['id' => $blog->getId()]);
        }

        // Render the template
        return $this->render('message/new.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

}
