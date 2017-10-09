<?php

namespace Abi\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AbiUtilisateurBundle:Default:index.html.twig');
    }
}
