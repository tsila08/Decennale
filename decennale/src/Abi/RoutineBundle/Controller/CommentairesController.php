<?php

namespace Abi\RoutineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Abi\RoutineBundle\Form\ComsType;
use Abi\RoutineBundle\Entity\AbsCommentaire;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;
class CommentairesController extends Controller

{


    public function indexAction($pageD,$pagef,$valide)
    {

        $em = $this->getDoctrine()->getManager();
        $coms = $em->getRepository('AbiRoutineBundle:AbsCommentaire')->findBy(array('commentEtat'=>1),array('commentDate' => 'ASC'));
                                                                             


        $entity = new AbsCommentaire();
        
        $form   = $this->createCreateForm($entity);
        
        
        return $this->render('AbiRoutineBundle:Commentaires:index.html.twig',array(
                       'pageD'=>$pageD,
                       'pageF'=>$pagef,
                        'coms'=>$coms,
                       'valide'=>$valide,
                        'form' => $form->createView()));
    }

     private function createCreateForm(AbsCommentaire $entity)
     {
        $form = $this->createForm(new ComsType(), $entity, array(
            'action' => $this->generateUrl('devis_decennale_createComs'),
            'method' => 'POST',
        ));

       // $form->add('submit', 'submit', array('label' => 'Create'));
        
        return $form;
    }

    public function createAction(Request $request)
    {
        $entity = new AbsCommentaire();
	$d = date_create();

        $entity->setCommentRef(date_format($d, 'Y-m-d H:i:s:ms'));
        $entity->setCommentDate($d);
        $entity->setCommentEtat(0);
      
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
          
     
        return $this->redirect($this->generateUrl('devis_decennale_afficherComs',array('pageD' => 0,'pagef'=>10,'valide'=>1)));
    }
}
