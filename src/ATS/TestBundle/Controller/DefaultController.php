<?php

namespace ATS\TestBundle\Controller;
use ATS\TestBundle\Entity\Product;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('ATSTestBundle:Default:index.html.twig');
    }

    public function afficherAction(Request $request)
    {

        $products = (array)json_decode(file_get_contents('http://internal.ats-digital.com:3066/api/products'),true);

        $product1 = new Product();


        // Ajout dans la base de données
        /*

        $em = $this->getDoctrine()->getManager();
        $productName = $request->get('productName');
        $basePrice=$request->get('basePrice');
        $imageUrl=$request->get('imageUrl');

        $product1->setProductName($productName);
        $product1->setBasePrice($basePrice);
        $product1->setImageUrl($imageUrl);

        $em->persist($product1);
        $em->flush();

        */




       return $this->render('ATSTestBundle:Modele:produits.html.twig', array("products"=>$products));
    }


    public function reviewsAction(Request $request)
    {

        $key = $request->get('reviews');

        $products = (array)json_decode(file_get_contents('http://internal.ats-digital.com:3066/api/products'),true);

     //   return $this->redirectToRoute('reviews');
        return $this->render('ATSTestBundle:Modele:reviews.html.twig', array("product"=>$products[$key]));

    }

}
