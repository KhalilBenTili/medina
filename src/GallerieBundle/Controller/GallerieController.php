<?php
/**
 * Created by PhpStorm.
 * User: khali
 * Date: 14/02/2018
 * Time: 23:02
 */

namespace GallerieBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GallerieController extends Controller
{

    public function GallerieAction()
    {
        return $this->render('GallerieBundle::Gallerie.html.twig', array(
            // ...
        ));
    }


}