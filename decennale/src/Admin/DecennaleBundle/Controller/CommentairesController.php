<?php 

namespace Admin\DecennaleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Abi\RoutineBundle\Form\ComsType;
use Abi\RoutineBundle\Entity\AbsCommentaire;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;

class CommentairesController extends Controller

{

    public function indexAction($pageD,$pagef)
    {

        $em = $this->getDoctrine()->getManager();
        $coms = $em->getRepository('AbiRoutineBundle:AbsCommentaire')->findBy(array('commentEtat'=>0),array('commentDate' => 'ASC'));
        
        
        return $this->render('AdminDecennaleBundle:Commentaires:index.html.twig',array(
                         'pageD'=>$pageD,
                       'pageF'=>$pagef,
                        'coms'=>$coms,
                        ));
    }

    public function valideAction($id,$valide)
    
    {
 
        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('AbiRoutineBundle:AbsCommentaire')->find($id);
        
        if ($valide==0)
        {

           $em->remove($com);
         
            $em->flush();
    return $this->redirect($this->generateUrl('admin_decennale_coms',array('pageD' => 0,'pagef'=>10)));
     
        
        }
        
        else
        {
           $com->setCommentEtat(1);
           $em->persist($com);
           $em->flush();
    return $this->redirect($this->generateUrl('admin_decennale_coms',array('pageD' => 0,'pagef'=>10)));
       
        
        }
 

          
        
      
    }



}
