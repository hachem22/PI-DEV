<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Video;
use App\Form\VideoType;

final class VlogController extends AbstractController
{
    #[Route('/vlog', name: 'vlog_dashboard')]
    public function dashboard(): Response
    {
        $videos = $this->getDoctrine()->getRepository(Video::class)->findAll();
        return $this->render('vlog/dashboard.html.twig', ['videos' => $videos]);
    }

    #[Route('/vlog/{id}', name: 'vlog_video')]
    public function video($id): Response
    {
        $video = $this->getDoctrine()->getRepository(Video::class)->find($id);

        if (!$video) {
            throw $this->createNotFoundException('The video does not exist');
        }

        return $this->render('vlog/video.html.twig', ['video' => $video]);
    }

    #[Route('/vlog/upload', name: 'vlog_upload')]
    public function upload(Request $request): Response
    {
        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $video->getFile();
            $filename = uniqid() . '.' . $file->guessExtension();
            $file->move($this->getParameter('vlog_directory'), $filename);

            $video->setFile($filename);
            $video->setUploadDate(new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($video);
            $entityManager->flush();

            return $this->redirectToRoute('vlog_dashboard');
        }

        return $this->render('vlog/upload.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/vlog/edit/{id}', name: 'vlog_edit')]
    public function edit(Request $request, $id): Response
    {
        $video = $this->getDoctrine()->getRepository(Video::class)->find($id);

        if (!$video) {
            throw $this->createNotFoundException('The video does not exist');
        }

        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload if a new file is uploaded
            if ($video->getFile()) {
                $file = $video->getFile();
                $filename = uniqid() . '.' . $file->guessExtension();
                $file->move($this->getParameter('vlog_directory'), $filename);
                $video->setFile($filename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('vlog_dashboard');
        }

        return $this->render('vlog/edit.html.twig', ['form' => $form->createView(), 'video' => $video]);
    }

    #[Route('/vlog/delete/{id}', name: 'vlog_delete')]
    public function delete($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $video = $entityManager->getRepository(Video::class)->find($id);

        if (!$video) {
            throw $this->createNotFoundException('The video does not exist');
        }

        $entityManager->remove($video);
        $entityManager->flush();

        return $this->redirectToRoute('vlog_dashboard');
    }
}