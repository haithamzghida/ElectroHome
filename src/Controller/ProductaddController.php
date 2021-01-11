<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AddproductType;
use App\Entity\Productadd;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductaddController extends AbstractController
{
    

    /**
     * @Route("/productadd", name="productadd")
     */
    public function newproduct(Request $request): Response
    {
        $productadd = new Productadd();
        $form = $this->createForm(AddproductType::class, $productadd);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($productadd);
            $em->flush();

            //return $this->redirectToRoute( route:'home');

        }
        return $this->render('productadd/index.html.twig', [
            "form" => $form->createView(),
        ]);
    }


    /**
     * 
     * 
     * @Route("/edit/{id}", name="product_edit")
     */
    public function edit(Request $request,Productadd $productadd)
    {
        
        $form = $this->createForm(AddproductType::class, $productadd);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            
            //$em->persist($productadd);
            $em->flush();
            return $this->redirectToRoute('productlist');

        }

        
        

        
        return $this->render('productadd/edtindex.html.twig', [
            "form" => $form->createView(),
         
            array('form'=>$form),
          
        ]);
        
    }

      
}
