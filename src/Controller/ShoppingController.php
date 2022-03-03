<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Car;
use App\Entity\Commande;
use App\Form\CustomerType;
use App\Repository\CarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }
        /**
         * @Route("/panier", name="panier")
         */
        public function index(Cart $panier)
    
        {
            $panierFinished = [];
            $panierSession = $panier->get();

            if (null != $panierSession){
                foreach ($panierSession as $id=>$quantity) {
        
                    $panierFinished[]=[
                        'car'=>$this->entityManager->getRepository(Car::class)->findOneBy(['id'=>$id]),
                        'quantity'=>$quantity,
                    ];
        
                }
            }

            return $this->render('cart/index.html.twig',[
                'panier'=>$panierFinished,
            ]);
        }
    
          /**
         * @Route("/panier/add/{id}", name="add_panier")
         */
        public function add(Cart $panier,$id)
        {
            //des que l'on est dans cartcontroller et das la fonction add , j'englobe la classe panier.php
            $panier->add($id);
            return $this->redirectToRoute('panier');
        }
    
          /**
         * @Route("/panier/delete", name="delete_panier")
         */
        public function delete(Cart $panier)
        {
            //des que l'on est dans cartcontroller et das la fonction add , j'englobe la classe panier.php
            $panier->remove();
            return $this->redirectToRoute('panier');
        }
    }
    
