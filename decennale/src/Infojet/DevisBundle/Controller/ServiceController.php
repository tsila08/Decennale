<?php

namespace Infojet\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Abi\RoutineBundle\Entity\AbsPageSite;
use Abi\RoutineBundle\Entity\AbsPageSidebar;


class ServiceController extends Controller
{
    public function obligationAction()
    {
$sd=new AbsPageSidebar();
        $em = $this->getDoctrine()->getManager();
        $page= $em->getRepository('AbiRoutineBundle:AbsPageSite')->findOneBy(array('pageTitle'=>'Obligations'));
        $sd= $em->getRepository('AbiRoutineBundle:AbsPageSidebar')->findOneBy(array('sidebarTitre'=>'Obligations'));
        
       return $this->render('InfojetDevisBundle:Service:obligation.html.twig', array('page'=>$page->getPageTexte(),'sd'=>$sd->getSidebarDescription()));
       
 }


}

?>
