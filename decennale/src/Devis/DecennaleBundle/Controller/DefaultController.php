<?php

namespace Devis\DecennaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevisDecennaleBundle:Default:index.html.twig');
    }
}
