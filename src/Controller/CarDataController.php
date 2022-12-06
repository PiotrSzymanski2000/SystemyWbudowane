<?php

namespace App\Controller;

use App\Repository\CarDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarDataController extends AbstractController
{
    #[Route('/car/data', name: 'app_car_data')]
    public function index(CarDataRepository $carDataRepository): Response
    {
        return $this->render('car_data/index.html.twig', [
            'carData' => $carDataRepository->findAll(),
        ]);
    }
}
