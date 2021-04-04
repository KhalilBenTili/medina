<?php

namespace IndexBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller
{
    /**
     * @Route("/Acceuil")
     */
    public function AcceuilAction()
    {
        $em=$this->getDoctrine()->getManager();
        $user = $this->getUser();
        $topRatedVideos = $em->getRepository("UserBundle:Videodiy")->topRatedDQL();

        $latestSearches = $em->getRepository("UserBundle:Tags")->lastSearchDQL($user);

        if  ($latestSearches[0]["tag"] == "") $x = $latestSearches[0]["tag"] ; else $x = '%'.$latestSearches[0]["tag"].'%' ;
        if  ($latestSearches[1]["tag"] == "") $y = $latestSearches[1]["tag"] ; else $y = '%'.$latestSearches[1]["tag"].'%' ;
        if  ($latestSearches[2]["tag"] == "") $z = $latestSearches[2]["tag"] ; else $z = '%'.$latestSearches[2]["tag"].'%' ;

        $recommendationResults =$em->getRepository("UserBundle:Videodiy")->recommendedVideosDQL($x,$y,$z);

        return $this->render("IndexBundle:Index:acceuil.html.twig", array('videos'=>$topRatedVideos,
            'recommendationResults'=>$recommendationResults,
            'lasts'=>$latestSearches

        ));
    }

    public function ForumAction()
    {
        return $this->render('@Index/Index/forum.html.twig', array(
            // ...
        ));
    }

    public function EventAction()
    {
        return $this->render('@Index/Index/Event.html.twig', array(
            // ...
        ));
    }

    public function ContactAction()
    {
        return $this->render('@Index/Index/Contact.html.twig', array(
            // ...
        ));
    }

}
