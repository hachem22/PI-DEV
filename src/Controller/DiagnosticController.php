<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DiagnosticController extends AbstractController
{
    #[Route('/api/generate-diagnostic', name: 'generate_diagnostic', methods: ['POST'])]
    public function generateDiagnostic(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $keywords = $data['keywords'] ?? [];

        // Mock AI service response for demonstration purposes
        $diagnostic = 'Diagnostic basé sur les mots clés: ' . implode(', ', $keywords) . '.';

        // In a real-world scenario, you would call an external AI service here
        // Example:
        // $response = $this->aiService->generateDiagnostic($keywords);
        // $diagnostic = $response['diagnostic'];

        return new JsonResponse(['diagnostic' => $diagnostic]);
    }
}