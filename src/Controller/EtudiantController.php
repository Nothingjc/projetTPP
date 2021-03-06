<?php

namespace App\Controller;

use App\Entity\Cursus;
use App\Entity\Etudiant;
use App\Form\EtudiantFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }

    #[Route('/etudiant/create', name: 'etudiant_create')]
    public function new(Request $request)
    {
        $task = new Etudiant();

        $form = $this->createForm(EtudiantFormType::class, $task);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->render('etudiant/static/success.html.twig');
            //return $this->redirectToRoute('newIntervenant_success');
        }

        return $this->render('etudiant/new.html.twig',
        ['EtudiantForm' => $form->createView(),
    ]);
    }

    #[Route('/cursus/listeCursus', name: 'listeEtudiants')]
     
    public function etudiantList(){
        $sousTitre = 'Liste des étudiants : ';
        $etudiant = $this->getDoctrine()
            ->getRepository(Etudiant::class)
            ->findAll();
        return $this->render('cursus/listeCursus.html.twig', [
            'etudiants_liste' => $etudiant,
            'sous_titre'=> $sousTitre,
        ]);
    }

    #[Route('/etudiant/etudiantDetail', name: 'etudiant_detail')]
    public function etudiantDetail(){
        return $this->render('etudiant/etudiantDetail.html.twig');
    }
}
