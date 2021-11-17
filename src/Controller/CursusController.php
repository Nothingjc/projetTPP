<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CursusController extends AbstractController
{
    #[Route('/cursus', name: 'cursus')]
    public function index(): Response
    {
        return $this->render('cursus/index.html.twig', [
            'controller_name' => 'CursusController',
        ]);
    }
}
