<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series', methods: ['GET'])]
    public function serieList(): Response
    {
        $serieList = [
            'Lost',
            'Grey Anatomy',
            'Loki',
            'Suits'
        ];

        return $this->render('series/index.html.twig', [
            'controller_name' => 'SeriesController',
            'seriesList' => $serieList
        ]);
    }

    #[Route('/series/create', methods: ['GET'])]
    public function addSeriesForm(): Response
    {
        return $this->render('series/form.html.twig');
    }
}
