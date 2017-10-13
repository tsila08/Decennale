<?php 

namespace Admin\DecennaleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Abi\RoutineBundle\Entity\DevisRecue;
use Infojet\DevisBundle\Entity\AbsClient;
use Infojet\DevisBundle\Entity\AbsClientSociete;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;

class DevisController extends Controller

{

 public function indexAction($pageD,$pagef)
    {

            $em = $this->getDoctrine()->getManager();
            $dr= $em->getRepository('AbiRoutineBundle:DevisRecue')->findBy(array(),array('dvrDate' => 'DESC'));
          
            $d = array();
            $c = array(); 
            $s = array();

            for ($i = 0; $i < sizeof($dr); $i++) {

              $a=$dr[$i];
              $d[$i]=$a;
              $c[$i]= $em->getRepository('InfojetDevisBundle:AbsClient')->findOneBy(array('clientRef'=>  $a->getDvrRefclient()));
              $s[$i]= $em->getRepository('InfojetDevisBundle:AbsClientSociete')->findOneBy(array('soRef'=> $a->getDvrRefclient()));

                                           }

             return $this->render('AdminDecennaleBundle:Devis:index.html.twig',array(
                         'pageD'=>$pageD,
                       'pageF'=>$pagef,
                        'd'=>$d,
                         'c'=>$c,
                          's'=>$s
                        ));

    }
}
