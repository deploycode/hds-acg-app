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
  *@Route("/articulos/{slug}", name="post_view")
  */
  public function viewAction(Post $post , $slug)
  {
    $em = $this->getDoctrine()->getManager();

    $query = $em->getRepository('AppBundle:Post')->createQueryBuilder('p')
    ->orderBy('p.updatedAt', 'DESC')
    ->getQuery();
    $menus = $em->getRepository('AppBundle:Menu')->findAll();
    $the_post= $em->getRepository('AppBundle:Post')->findOneBySlug($slug);
    $posts = $em->getRepository('AppBundle:Post')->findAll();
    return $this->render('post.html.twig' , array('posts' => $posts ,'the_post' => $the_post , 'menus'=>$menus) );
  }

  /**
  *@Route("/nosotros", name="nosotros")
  */
   public function nosotrosAction()
   {
     $em = $this->getDoctrine()->getManager();

     $menus = $em->getRepository('AppBundle:Menu')->findAll();
     return $this->render('nosotros.html.twig', array ('menus'=>$menus));
   }
}
