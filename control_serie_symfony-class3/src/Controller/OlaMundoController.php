<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{
    #[Route('/ola_mundo', methods: ['GET'])]
    public function index(Request $request): Response
    {
        //dd(1);
        //dd($request);
        //dd($request->query->get('id'));
        return new Response('<h1>Ola Mundo</h1>' . $request->query->get('id'), status: 401);
    }
}
