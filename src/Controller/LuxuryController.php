<?php

namespace App\Controller;

use App\Entity\Car;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuxuryController extends AbstractController
{
    /**
     * @Route("/luxury", name="luxury")
     */
    // public function index(): Response
    // {
    //     return $this->render('luxury/index.html.twig', [
    //         'controller_name' => 'LuxuryController',
    //     ]);
    // }

      /**
     * @Route("/createLuxuryCar", name="createLuxuryCar")
     */
    public function createLuxuryCar(ManagerRegistry $doctrine): Response
    {
        $collectionCars = $doctrine->getRepository(Car::class)->findAll(

            // ["marque" => "Ferrari","modele"=>"Roma"]
        );
        
        return $this->render('luxury/index.html.twig', ['collectionCars' => $collectionCars]);

    }


}
