<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RessourceApiController extends AbstractController
{
    /**
     * @Route("/ressource/api", name="ressource_api")
     */
    public function index(): Response
    {
        return $this->render('ressource_api/index.html.twig', [
            'controller_name' => 'RessourceApiController',
        ]);
    }
}
