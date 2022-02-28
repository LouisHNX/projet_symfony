<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GroupApiController extends AbstractController
{
    /**
     * @Route("/group/api", name="group_api")
     */
    public function index(): Response
    {
        return $this->render('group_api/index.html.twig', [
            'controller_name' => 'GroupApiController',
        ]);
    }
}
