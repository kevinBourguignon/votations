<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/bidon")]
class BidonController extends AbstractController
{
    #[Route('/', name: 'app_bidon')]
    public function index(): Response
        {
            return $this->render('bidon/index.html.twig', 
            [
                'controller_name' => 'bidon'
            ]
        );
    }
}
