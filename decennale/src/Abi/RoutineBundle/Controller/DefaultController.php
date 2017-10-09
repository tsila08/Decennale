<?php

namespace Abi\RoutineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AbiRoutineBundle:Default:index.html.twig');
    }
}
