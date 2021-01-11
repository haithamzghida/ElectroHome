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
     * @Route("/imhome/{id}", name="imhome")
     */
    public function index0(int $id): Response
    {

        $pro=$this->getDoctrine()->getRepository(Productadd::class)->find($id);

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'product' => $pro]);
        
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
        return $this->render('home/shop.html.twig', [
            'controller_name' => 'HomeController',
        ]);
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
     * @Route("/shop-single", name="shop-single")
     * 
     * @return Response
     */
    public function index6(Productadd $id)
    {

        $product=$this->getDoctrine()->getRepository(Productadd::class)->findAll();

        return $this->render('home/shop-single.html.twig', [
            'controller_name' => 'HomeController',
            'product' => $product]);
        
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


    
}
