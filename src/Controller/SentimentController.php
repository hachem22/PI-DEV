<?php

namespace App\Controller;

use App\Service\SentimentAnalysisService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SentimentController extends AbstractController
{
    #[Route('/analyze/{text}', name: 'analyze_sentiment')]
    public function analyzeSentiment(string $text, SentimentAnalysisService $sentimentAnalysisService): JsonResponse
    {
        $sentiment = $sentimentAnalysisService->analyze($text);

        return $this->json([
            'text' => $text,
            'sentiment' => $sentiment,
        ]);
    }
}