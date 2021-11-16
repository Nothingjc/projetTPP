<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController
{

    // #[route("/", methods:['GET'], name: "racine")]

    /**
     * @Route("/", methods = {"GET"}, name = "racine")
     */
    public function bonjour()
    {
        return new Response('bonjour et bienvenue');
    }
}