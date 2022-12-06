<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarDataController extends AbstractController
{
    #[Route('/car/data', name: 'app_car_data')]
    public function index(): Response
    {
        return $this->render('car_data/index.html.twig', [
            'controller_name' => 'CarDataController',
        ]);
    }
}
