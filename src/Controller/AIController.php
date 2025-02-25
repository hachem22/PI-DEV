<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AIController extends AbstractController
{
    #[Route('/api/generate-diagnostic', name: 'generate_diagnostic', methods: ['POST'])]
    public function generateDiagnostic(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $maladie = $data['maladie'] ?? '';

        // Mock AI service response for demonstration purposes
        $diagnostic = 'Diagnostic généré pour la maladie: ' . $maladie;

        return new JsonResponse(['diagnostic' => $diagnostic]);
    }

    #[Route('/api/generate-ordonnance', name: 'generate_ordonnance', methods: ['POST'])]
    public function generateOrdonnance(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $maladie = $data['maladie'] ?? '';

        // Mock AI service response for demonstration purposes
        $ordonnance = 'Ordonnance générée pour la maladie: ' . $maladie;

        return new JsonResponse(['ordonnance' => $ordonnance]);
    }
}