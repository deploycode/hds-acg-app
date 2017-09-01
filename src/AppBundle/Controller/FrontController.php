<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Post;

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
   /**
  *@Route("/articulos/{slug}", name="articulo")
  */
  public function articuloAction(Post $post , $slug)
  {
    $em = $this->getDoctrine()->getManager();
    $query = $em->getRepository('AppBundle:Post')->createQueryBuilder('p')
    ->orderBy('p.updatedAt', 'DESC')
    ->getQuery();
    $menus = $em->getRepository('AppBundle:Menu')->findAll();
    $post= $em->getRepository('AppBundle:Post')->findOneBySlug($slug);
    $collage = $query->getResult();
    return $this->render('post.html.twig' , array('post' => $post , 'collage'=>$collage , 'menus'=>$menus) );
  }
}
