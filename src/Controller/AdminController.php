<?php

namespace App\Controller;

use App\Entity\AddProduct;
use App\Entity\Contact;
use App\Entity\Product;
use App\Entity\Productadd;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin2", name="Contactlist")
     */
    public function list(): Response
    {
      $contact=$this->getDoctrine()->getRepository(Contact::class)->findAll();


        return $this->render('admin/admin2.html.twig', [
            'contact' => $contact]);
    }


    /**
     * @Route("/delete/{id}", name="messag_delete")
     * 
     * @return Response
     */
    public function delete(Contact $contact)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($contact);
        $em->flush();

        return $this->redirectToRoute('Contactlist');
    }

     /**
     * @Route("/admin3", name="productlist")
     */
    public function show(): Response
    {
      $product=$this->getDoctrine()->getRepository(Productadd::class)->findAll();


        return $this->render('admin/admin3.html.twig', [
            'product' => $product]);
    }


       /**
     * @Route("/delete2/{id}", name="messag_delete2")
     * 
     * @return Response
     */
    public function delete2(Productadd $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('productlist');
    }

        
}
