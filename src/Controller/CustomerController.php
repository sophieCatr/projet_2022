<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Form\CustomerType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer", name="customer")
     */
    public function index(Request $request,ManagerRegistry $doctrine): Response
    {   
        $entityManager = $doctrine->getManager();
        $customer = new Customer();
        $form = $this->createForm(CustomerType ::class,$customer);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            dump($customer);
            $entityManager->persist($customer);
            // dd($request->get("customer"));
            $entityManager->flush();
        }

        return $this->render('customer/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
