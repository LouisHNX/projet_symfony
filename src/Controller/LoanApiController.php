<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoanApiController extends AbstractController
{
    /**
     * @Route("/loan/api", name="loan_api")
     */
    public function index(): Response
    {
        return $this->render('loan_api/index.html.twig', [
            'controller_name' => 'LoanApiController',
        ]);
    }
}
