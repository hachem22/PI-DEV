<?php

namespace App\Controller;

use App\Repository\StockPharmacieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/catalogue')]
class CatalogueController extends AbstractController
{
    #[Route('/', name: 'app_catalogue_index', methods: ['GET'])]
    public function index(StockPharmacieRepository $stockPharmacieRepository): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'produits' => $stockPharmacieRepository->findAll()
        ]);
    }
} 