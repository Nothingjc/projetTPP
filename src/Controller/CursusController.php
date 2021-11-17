<?php

namespace App\Controller;

use App\Entity\Cursus;
use App\Repository\EtudiantRepository;
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

    
     #[Route('/cursus/lycee', name: '_liste')]
     
    public function cursusList(){
        $sousTitre = 'Liste des cursus : ';
        $cursus = $this->getDoctrine()
            ->getRepository(Cursus::class)
            ->findAll();
        return $this->render('cursus/lycee.html.twig', [
            'cursus_liste' => $cursus,
            'sous_titre'=> $sousTitre,
        ]);
    }
}
