<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /** Annotation
     * @Route("/")
     * @Route("/home", name="home")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        
        $categories = $categoryRepository->findAll();
        
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            
        ]);
    }
}
