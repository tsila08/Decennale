<?php

namespace Admin\DecennaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminDecennaleBundle:Default:index.html.twig');
    }
}
