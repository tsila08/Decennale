<?php

namespace Infojet\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfojetDevisBundle:Default:index.html.twig');
    }
}
