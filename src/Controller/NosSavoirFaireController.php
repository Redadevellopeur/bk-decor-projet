<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NosSavoirFaireController extends AbstractController
{
    /**
     * @Route("/nos/savoir/faire", name="nos_savoir_faire")
     */
    // On fait une injection de dependance CategoryRepository
    public function index(CategoryRepository $categoryRepository): Response
    {
        // On recupère toutes les categories avec la  methodes findAll
        $categories = $categoryRepository->findAll();

            return $this->render('nos_savoir_faire/index.html.twig', [
                'categories' => $categories,
        ]);
    }
}
