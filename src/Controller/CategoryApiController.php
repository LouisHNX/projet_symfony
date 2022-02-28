<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryApiController extends AbstractController
{
    /**
     * @Route("/category/api", name="category_api")
     */
    public function index(): Response
    {
        return $this->render('category_api/index.html.twig', [
            'controller_name' => 'CategoryApiController',
        ]);
    }
}
