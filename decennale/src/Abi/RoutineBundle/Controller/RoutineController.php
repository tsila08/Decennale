<?php

namespace Abi\RoutineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Infojet\DevisBundle\Entity\DemandeDevisAutre ;
use Infojet\DevisBundle\Entity\Risque ;
use Infojet\DevisBundle\Entity\Echeance ;

class RoutineController extends Controller
{
    public function indexAction()
    {
        $DemandeDevisAutre = new DemandeDevisAutre();
		$formBuilder = $this->createFormBuilder($DemandeDevisAutre); 
		$formBuilder 	
			->add('estDejaAssure', 'checkbox', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Avez-vous déjà été assuré?...', 
									
						 'title'=>'Avez-vous déjà été assuré?', 
					  )))
			->add('estPlusTrentePourcentSoustraitance', 'checkbox', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Avez-vous Plus de 30% de soustraitance ?...', 
									
						 'title'=>'Avez-vous Plus de 30% de soustraitance ?', 
					  ))) 
			->add('estRepriseDuPasse', 'checkbox', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Souhaitez vous la reprise du passé ?...', 
						
						 'title'=>'Souhaitez vous la reprise du passé ?', 
					  )))
			->add('estRedressementJudiciare', 'checkbox', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Êtes-vous en redressement judiciaire ou en liquidation ? ...', 
							
						 'title'=>'Êtes-vous en redressement judiciaire ou en liquidation ? ', 
					  )))
			->add('dateEffet', 'date', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Date effet...', 
						
						 'title'=>'Date effet', 
					  )))
			->add('Echeance' , 'entity' , array(
					'class' => 'InfojetDevisBundle:Echeance' ,
					'property' => 'libelle' ,
					'multiple' => false,
					'query_builder' =>
					function(\Infojet\DevisBundle\Repository\EcheanceRepository $tc) {
					return $tc->getEcheanceDisponibleForm() ;
					}))	
			->add('civilite', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre civilite Mme/Mlle/Mr...', 
						'class'=>'form-control',
						 'title'=>'Votre civilite', 
					  )))
			->add('username', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre nom...', 
						'class'=>'form-control',
						 'title'=>'Votre nom', 
					  )))
			->add('userfirstname', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre prenom...', 
						'class'=>'form-control',
						 'title'=>'Votre nom', 
					  )))
			->add('mail', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre adresse mail...', 
						'class'=>'form-control',
						 'title'=>'votre adresse mail', 
					  )))
			->add('codePostal', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre code Postal...', 
						'class'=>'form-control',
						 'title'=>'Votre code Postal', 
					  )))
			->add('ville', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre ville...', 
						'class'=>'form-control',
						 'title'=>'Votre ville', 
					  )))
			->add('adresseEntreprise', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Adresse de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'Adresse de votre entreprise', 
					  )))
			->add('raisonSociale', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Raison Sociale de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'raison Sociale de votre entreprise', 
					  )))
			->add('formeJuridique', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Forme Juridique de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'Forme Juridique de votre entreprise', 
					  )))
			->add('numeroSiret', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'numero Siret de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'numero Siret de votre entreprise', 
					  )))
			->add('dateCreation', 'date', array('required'=>true, 
					  'attr'=>array('placeholder'=>'date Creation de votre entreprise...',
						'class'=>'form-control',
						 'title'=>'date Creation de votre entreprise', 
					  )))
			->add('chiffreAffaire', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'chiffre d Affaire de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'chiffre d Affaire de votre entreprise', 
					  )))
			->add('nombreDeSalarie', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'nombre De Salarie de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'nombre De Salarie de votre entreprise', 
					  )))
			->add('telephone', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'telephone de votre entreprise...', 
						'class'=>'form-control',
						 'title'=>'telephone de votre entreprise', 
					  )));
			// Ajouter les riques dinamiquement

			$gr_repository = $this->getDoctrine()
					->getManager()
					->getRepository('InfojetDevisBundle:GroupeRisque');
			$groupeRisques = $gr_repository->findAll() ; 

			$form = $formBuilder->getForm(); 
			$request = $this->get('request'); 

			if ($request->getMethod() == 'POST')  
			{ 
				$form->bind($request); 
				if ($form->isValid() )  
				{ 
					/* ajouter les risques selectionner */
					foreach ($groupeRisques as $key => $groupeRisque) {
						if($groupeRisque->getRisques()){
							foreach ($groupeRisque->getRisques() as $keyRisque => $risque) {
								if($request->get($risque->getInputName())){
									$DemandeDevisAutre->AddRisque($risque) ;
								}
							}
						}
					}

					/* enregistrer utilisateur */
					/* enregistrer la demande*/
					$codeConfirmation = sha1(mt_rand(1,9) * 1000) ;
					$DemandeDevisAutre->setCodeConfirmation($codeConfirmation) ;
					$em = $this->getDoctrine()->getManager(); 
					$em->persist($DemandeDevisAutre); 
					$em->flush() ;
					
					/* envoyer mail */
						$destinatire = $DemandeDevisAutre->getMail() ;
						$objet = "Confirmer votre souscription chez Devis Decennale" ;
						$lien =$this->generateUrl('infojet_devis_confirmer_mail_demandeur', array('id_demande'=>$DemandeDevisAutre->getId(),
																											'code_validation'=>$codeConfirmation)) ;
						//ENVOIE DE L'E MAIL
					/*fin envoye mail */
					/*
					return $this->redirect($this->generateUrl('infojet_devis_demander_confirmation_mail_demandeur', 
													array('mail'=>$DemandeDevisAutre->getMail()))) ;
					*/
					return $this->redirect($this->generateUrl('infojet_devis_confirmer_mail_demandeur', array('id_demande'=>$DemandeDevisAutre->getId(),
																											'code_validation'=>$codeConfirmation)));
					
					
				} 
				else 
				{ 
					 return $this->render('AbiRoutineBundle:Routine:index.html.twig', array('form' =>$form->createView(), 
	        																		'groupeRisques'=>$groupeRisques,
	        																		'message'=>'Impossible de valider votre demande. Réessayer svp.'));
				} 
			}

	        return $this->render('AbiRoutineBundle:Routine:index.html.twig', array('form' =>$form->createView(), 
	        																		'groupeRisques'=>$groupeRisques,
	        																		'message'=>''));
    }
       public function contactAction()
    {
        return $this->render('AbiRoutineBundle:Routine:contact.html.twig', array());
    }
    public function quiSommesNousAction()
    {
        return $this->render('AbiRoutineBundle:Routine:quisommesnous.html.twig', array());
    }
}
