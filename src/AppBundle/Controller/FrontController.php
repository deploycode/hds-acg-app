<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{
  /**
  *@Route("/", name="home")
  */
   public function homeAction()
   {
     $em = $this->getDoctrine()->getManager();
     $menus = $em->getRepository('AppBundle:Menu')->findAll();

     return $this->render('home.html.twig', array ('menus'=>$menus));
   }
}
