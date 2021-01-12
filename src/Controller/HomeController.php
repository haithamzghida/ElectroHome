<?php

namespace App\Controller;

use App\Entity\Productadd;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {

        $product=$this->getDoctrine()->getRepository(Productadd::class)->findAll();

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'product' => $product]);
        
    }

    /**
     * @Route("/about", name="about")
     */
    public function index1(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function index2(): Response
    {

        $product=$this->getDoctrine()->getRepository(Productadd::class)->findAll();
        return $this->render('home/shop.html.twig', [
            'controller_name' => 'HomeController',
            'product' => $product]);
    }


    /**
     * @Route("/cart", name="cart")
     */
    public function index4(): Response
    {
        return $this->render('home/cart.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function index5(): Response
    {
        return $this->render('home/checkout.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


     /**
     * @Route("/shop-single/{id}", name="shop-single")
     * 
     * 
     */
    public function index6($id)
    {

        $rep=$this->getDoctrine()->getRepository(Productadd::class);
        $product = $rep->find($id);
        return $this->render('home/shop-single.html.twig', [
            'controller_name' => 'HomeController',
            'product' => $product,
        ]);
        
    }





     /**
     * @Route("shop-single", name="shopsingle")
     * 
     * @return Response
     */
    public function index77()
    {
            return $this->render('home/shop-single.html.twig', [
            'controller_name' => 'HomeController',
            
        ]);
        
    }

 
    /**
     * @Route("/thankyou", name="thankyou")
     */
    public function index7(): Response
    {
        return $this->render('home/thankyou.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/shopdet", name="shopdet")
     */
    public function index8(): Response
    {
        
        return $this->render('home/shopdet.html.twig', [
            'controller_name' => 'HomeController',
            
        ]);
    }


    
}
