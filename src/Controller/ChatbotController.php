<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ChatbotService;
use Doctrine\ORM\NonUniqueResultException;

class ChatbotController extends AbstractController
{
    private $chatbotService;

    public function __construct(ChatbotService $chatbotService)
    {
        $this->chatbotService = $chatbotService;
    }

    #[Route('/chatbot-ui', name: 'chatbot_ui')]
    public function chatbotUi()
    {
        return $this->render('chatbot.html.twig');
    }

    #[Route('/chatbot', name: 'chatbot', methods: ['POST'])]
    public function chatbot(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';

        try {
            $response = $this->chatbotService->analyserSymptomes($message);
        } catch (NonUniqueResultException $e) {
            // Handle the exception and give a meaningful response
            return new JsonResponse(['error' => 'Multiple results found where one was expected.'], 500);
        }

        return new JsonResponse(['response' => $response]);
    }
}