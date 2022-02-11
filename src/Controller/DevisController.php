<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DevisController extends AbstractController
{
    /**
     * @Route("/devis", name="devis")
     */

    //injectionn de dependence dans la methodes
    public function index(): Response
    {
    
            return $this->render('devis/index.html.twig', [
                'controller_name' => 'DevisController',
            ]);
    }

}
