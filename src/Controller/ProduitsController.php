<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ProduitsRepository;

#[Route('/produits')]
class ProduitsController extends AbstractController
{
    private $produitsRepository;

    public function __construct(ProduitsRepository $produitsRepository)
    {
        $this->produitsRepository = $produitsRepository;
    }

    #[Route('/', name: 'produits')]
    public function index(): Response
    {
        $produits = $this->produitsRepository->findAll();

        return $this->render('produits/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}



