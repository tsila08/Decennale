<?php

namespace Abi\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Abi\UtilisateurBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UtilisateurController extends Controller
{
	//Connexion
	public function loginAction()
    {
        $texte ="" ;
		$titre = ""; 
		if ($request = $this->getRequest())
		{
			$texte = $request->get('texte');
			$titre = $request->get('titre');
		}
		// Si le visiteur est déjà identifié, on le redirige vers l'accueil
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
		{
			return $this->redirect($this->generateUrl('mae_routine_homepage'));
		}
		$request = $this->getRequest();
		$session = $request->getSession();
		// On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) 
		{
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		}
		else 
		{
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		return $this->render('AbiUtilisateurBundle:Utilisateur:login.html.twig',array(
			// Valeur du précédent nom d'utilisateur entré parl'internaute
			'last_username' => $session->get(SecurityContext::LAST_USERNAME),'error' => $error,
			'titre'=>$titre,
			'texte'=>$texte));	
	}
	
	//Creer un compte 
	public function creerCompteAction()
    {
		$utilisateur = new Utilisateur();
		$formBuilder = $this->createFormBuilder($utilisateur); 
		$formBuilder 
			->add('photoProfil', 'file', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre photo de profil...', 
						 'title'=>'Veuillez choisir une photo.', 
					  )))
			->add('username', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre nom...', 
						 'title'=>'Veuillez indiquer votre nom.', 
					  )))
			->add('password', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre mot de passe...', 
						 'title'=>'Veuillez specifier votre mot de passe.', 
					  )))
			->add('confirmationMdp', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Resaisissez votre mot de passe...', 
						 'title'=>'Veuillez re-specifier votre mot de passe.', 
					  )))
			->add('adresse', 'text', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Votre adresse...', 
						 'title'=>'Veuillez specifier votre adresse.', 
					  )))
			->add('ville', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre ville...', 
						 'title'=>'Veuillez specifier votre ville.', 
					  )))
			->add('telephone', 'text', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Votre numero telephone...', 
						 'title'=>'Veuillez specifier votre numero telephone.', 
					  )))
			->add('nomEntreprise', 'text', array('required'=>false, 
					  'attr'=>array('placeholder'=>'Nom de votre entreprise...', 
						 'title'=>'Veuillez specifier les informations sur votre entreprise.', 
					  )))
			->add( 'typeCompteString' , 'entity' , array(
					'class' => 'BDSUtilisateurBundle:typeCompte' ,
					'property' => 'privilege' ,
					'multiple' => false,
					'query_builder' =>
					function(\ABI\UtilisateurBundle\Entity\TypeCompteRepository $tc) {
					return $tc->getTypeCompteDisponible() ;
					}
					))	
			->add('mail', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'votre adresse mail...', 
						 'title'=>'Veuillez spécifier votre adresse mail.', 
					  ))); 
		$form = $formBuilder->getForm(); 
		$request = $this->get('request'); 
		if ($request->getMethod() == 'POST')  
		{ 
			$form->bind($request); 
			if ($form->isValid())  
			{ 
				if ($utilisateur->getPassword()== sha1($utilisateur->getConfirmationMdp()))
				{
					$utilisateur->setSalt('');
					$repository = $this->getDoctrine()
						->getManager()
						->getRepository('BDSUtilisateurBundle:TypeCompte');
					$typeCompte = $repository->findOneById($utilisateur->getTypeCompteString()) ;
					$utilisateur->setTypeCompteId($typeCompte->getId());
					$utilisateur->setRoles(array($typeCompte->getRoleEnCours()));
					$em = $this->getDoctrine()->getManager(); 
					$em->persist($utilisateur); 
					$em->flush(); 
					//return $this->render('MazProduitBundle:Produit:gererProprietaire.html.twig',array('form' =>$form->createView(),'message'=>"")); 
					return $this->redirect( $this->generateUrl('abi_utilisateur_login') ); 
				}
				return $this->render('BDSUtilisateurBundle:Utilisateur:creercompte.html.twig',array('form' =>$form->createView(),  
								  'message'=>"Vérifier votre mot de passe.")); 
				
			} 
			else 
			{ 
				return $this->render('BDSUtilisateurBundle:Utilisateur:creercompte.html.twig',array('form' =>$form->createView(),  
								  'message'=>"Impossible de valider votre formulaire. Veuillez réessayer svp.")); 
			} 
		}
		return $this->render('BDSUtilisateurBundle:Utilisateur:creercompte.html.twig',array('form' =>$form->createView(), 'message'=>''));	
	}
	
	
	
	//modifier profil
	public function modifierProfilAction()
    {
		if ($this->getUser()) 
		{
			$utilisateur = $this->getUser();
			$formBuilder = $this->createFormBuilder($utilisateur); 
			$formBuilder 
				->add('username', 'text', array('required'=>true, 
						  'attr'=>array('placeholder'=>'Votre nom...', 
							 'title'=>'Veuillez indiquer votre nom.', 
						  )))
				->add('adresse', 'text', array('required'=>false, 
						  'attr'=>array('placeholder'=>'Votre adresse...', 
							 'title'=>'Veuillez specifier votre adresse.', 
						  )))
				->add('ville', 'text', array('required'=>true, 
						  'attr'=>array('placeholder'=>'Votre ville...', 
							 'title'=>'Veuillez specifier votre ville.', 
						  )))
				->add('telephone', 'text', array('required'=>false, 
						  'attr'=>array('placeholder'=>'Votre numero telephone...', 
							 'title'=>'Veuillez specifier votre numero telephone.', 
						  )))
				->add('nomEntreprise', 'text', array('required'=>false, 
						  'attr'=>array('placeholder'=>'Nom de votre entreprise...', 
							 'title'=>'Veuillez specifier les informations sur votre entreprise.', 
						  )))
				->add( 'typeCompteString' , 'entity' , array(
						'class' => 'BDSUtilisateurBundle:typeCompte' ,
						'property' => 'privilege' ,
						'multiple' => false,
						'query_builder' =>
						function(\BDS\Bundle\UtilisateurBundle\Entity\TypeCompteRepository $tc) {
						return $tc->getTypeCompteDisponible() ;
						}
						)); 
			$form = $formBuilder->getForm(); 
			$request = $this->get('request'); 
			if ($request->getMethod() == 'POST')  
			{ 
				$form->bind($request); 
				if ($form->isValid())  
				{ 
					
					$utilisateur->setSalt('');
					$repository = $this->getDoctrine()
						->getManager()
						->getRepository('AbiUtilisateurBundle:TypeCompte');
					$typeCompte = $repository->findOneById($utilisateur->getTypeCompteString()) ;
					$utilisateur->setTypeCompteId($typeCompte->getId());
					$utilisateur->setRoles(array($typeCompte->getRoleEnCours()));
					$em = $this->getDoctrine()->getManager();
					
					$em->persist($utilisateur); 
					$em->flush(); 
					return $this->redirect( $this->generateUrl('abi_routine_accueil') ); 
				} 
				else 
				{ 
					return $this->render('AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig',array('form' =>$form->createView(),  
									  'message'=>"Formulaire invalide")); 
				} 
			}
			return $this->render('AbiUtilisateurBundle:Utilisateur:modifierProfil.html.twig',array('form' =>$form->createView(),'message'=>''));	
		}
		return $this->redirect($this->generateUrl('abi_utilisateur_login'));
	}
	
	//modifier profil
	public function monCompteAction()
    {
		if($this->getUser())
		{
			return $this->render('AbiUtilisateurBundle:Utilisateur:monCompte.html.twig');	
		}
		return $this->redirect($this->generateUrl('abi_utilisateur_login'));
	}
	
	//modifier info connexion
	public function modifierInfoConnexionAction()
    {
		if ($this->getUser()) 
		{
			$utilisateur = $this->getUser();
			$formBuilder = $this->createFormBuilder($utilisateur); 
			$formBuilder
				->add('oldPassword', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre ancien mot de passe...', 
						 'title'=>'Veuillez specifier votre ancien mot de passe.', 
					  )))
				->add('password', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre nouv mot de passe...', 
						 'title'=>'Veuillez specifier votre mot de passe.', 
					  )))
				->add('confirmationMdp', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Resaissez votre nouv mot de passe...', 
						 'title'=>'Veuillez re-specifier votre mot de passe.', 
					  )))
				->add('mail', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Adresse mail...', 
						 'title'=>'Veuillez spécifier l\' adresse mail.', 
					  ))); 
			$form = $formBuilder->getForm(); 
			$request = $this->get('request'); 
			if ($request->getMethod() == 'POST')  
			{ 
				$form->bind($request); 
				if ($form->isValid())  
				{ 
					if ($this->getUser()->getPassword()== $utilisateur->getPassword())
					{
						if ($utilisateur->getPassword()== sha1($utilisateur->getConfirmationMdp()))
						{
							$em = $this->getDoctrine()->getManager(); 
							$em->persist($utilisateur); 
							$em->flush(); 
							return $this->redirect( $this->generateUrl('abi_utilisateur_login') ); 
						}
						return $this->render('BDSUtilisateurBundle:Utilisateur:modifierInfoConnexion.html.twig',array('form' =>$form->createView(),  
									  'message'=>"Vérifier votre mot de passe.")); 
						
					}
					return $this->render('BDSUtilisateurBundle:Utilisateur:modifierInfoConnexion.html.twig',array('form' =>$form->createView(),  
									  'message'=>"Mot de passe incorrecte")); 
					
				} 
				else 
				{ 
					return $this->render('BDSUtilisateurBundle:Utilisateur:modifierInfoConnexion.html.twig',array('form' =>$form->createView(),  
									  'message'=>"Forme invalide")); 
				} 
			}
			return $this->render('BDSUtilisateurBundle:Utilisateur:modifierInfoConnexion.html.twig',array('form' =>$form->createView(),'message'=>''));	
		}
		return $this->redirect($this->generateUrl('abi_utilisateur_login'));
	}
	
	//mot de passe oublie
	public function motDePasseOublieAction()
    {
		if ($this->getUser()) 
		{
			return $this->redirect($this->generateUrl('abi_utilisateur_login'));
		}
		else
		{
			$utilisateur = new Utilisateur();
			$formBuilder = $this->createFormBuilder($utilisateur); 
			$formBuilder
				->add('mail', 'text', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Adresse mail...', 
						 'title'=>'Veuillez spécifier l\' adresse mail.', 
					  ))); 
			$form = $formBuilder->getForm(); 
			$request = $this->get('request'); 
			if ($request->getMethod() == 'POST')  
			{ 
				$form->bind($request); 
				if ($form->isValid())  
				{ 
					$repository = $this->getDoctrine()
						->getManager()
						->getRepository('BDSUtilisateurBundle:utilisateur');
					$utilisateurParMail = $repository->findOneByMail($utilisateur->getMail()) ;
					if ($utilisateurParMail)
					{
						
						
						return $this->redirect($this->generateUrl('bds_utilisateur_verifier_recuperer_mot_de_passe',array('mail'=>$utilisateurParMail->getMail())));
						
					}
					return $this->render('BDSUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig',array('form' =>$form->createView(),  
									  'message'=>"L'adresse mail saisie ne correspond à aucun compte. Veuillez vérifier svp .")); 
					
				} 
				else 
				{ 
					return $this->render('BDSUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig',array('form' =>$form->createView(),  
									  'message'=>"Formulaire invalide invalide")); 
				} 
			}
			return $this->render('BDSUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig',array('form' =>$form->createView(),'message'=>''));	
		}
			
	}
	
	//vérifier mail  récuperer mot de passe
	public  function verifierRecupererMotDePasseAction($mail)
    {
		if ($this->getUser()) 
		{
			return $this->redirect($this->generateUrl('abi_utilisateur_login'));
		}
		else
		{  
				
					$repository = $this->getDoctrine()
						->getManager()
						->getRepository('BDSUtilisateurBundle:Utilisateur');
					$utilisateurParMail = $repository->findOneByMail($mail) ;
					if ($utilisateurParMail)
					{
						return $this->render('BDSUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig',array(
																												'nom'=>$utilisateurParMail->getUsername(),
																												'mail'=>$utilisateurParMail->getMail()));	
						//return $this->redirect($this->generateUrl('bds_utilisateur_recuperer_mot_de_passe',array('mail'=>$utilisateurParMail->getMail())));
						
					}
					else
					{
					return $this->redirect($this->generateUrl('bds_utilisateur_mot_de_passe_oublie'));
					
					}
					
				
			
			//return $this->render('BDSUtilisateurBundle:Utilisateur:verifierRecupererMotDePasse.html.twig',array('form' =>$form->createView(),'message'=>''));	
		}
			
	}
	
	
	//envoyer mail récupération mot de passe
	public  function recupererMotDePasseAction($mail)
    {
		if ($this->getUser()) 
		{
			return $this->redirect($this->generateUrl('abi_utilisateur_login'));
		}
		else
		{  
				
					$repository = $this->getDoctrine()
						->getManager()
						->getRepository('BDSUtilisateurBundle:Utilisateur');
					$utilisateurParMail = $repository->findOneByMail($mail) ;
					if ($utilisateurParMail)
					{
						$mdpCrypte = sha1($utilisateurParMail->getPassword()) ;
						$lien = $this->generateUrl('bds_utilisateur_reinitialiser_mot_de_passe',array('mail'=>$mail,'motDePasse'=>$mdpCrypte)) ;
						/*envoyer un courrier à l'administrateur*/
						$contact = new Contact() ;
						$contact->setMail($mail) ;
						$contact->setTelephone($utilisateurParMail->getTelephone()) ;
						$contact->setNom($utilisateurParMail->getUserName()) ;
						$message = "Demande récupération mot de passe. Cet utilisateur a demandé la reinitialisation de son mot de passe. Veuillez lui transmettre le lien suivant, par mail ou par sms. -- ".$lien." --" ;
						$contact->setMessage($message) ;
						$em = $this->getDoctrine()->getManager(); 
						$em->persist($contact); 
						$em->flush();
						/* fin envoyer courrier*/
						return $this->redirect($this->generateUrl('bds_utilisateur_recuperer_mot_de_passe_effectue'));
						 
						
						
						
						
					}
					else
					{
					return $this->redirect($this->generateUrl('bds_utilisateur_mot_de_passe_oublie'));
					
					}
	
		}
			
	}
	
	
	//modifier info connexion
	public function reinitialiserMotDePasseAction($mail,$motDePasse)
    {
		if ($this->getUser()) 
		{
			return $this->redirect($this->generateUrl('abi_utilisateur_login'));
		}
		else
		{
			$repository = $this->getDoctrine()
						->getManager()
						->getRepository('BDSUtilisateurBundle:Utilisateur');
			$utilisateurParMail = $repository->findOneByMail($mail) ;
			$formBuilder = $this->createFormBuilder($utilisateurParMail); 
			$formBuilder
				->add('password', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre nouveau mdp..', 
						 'title'=>'Veuillez spécifier votre nouveau mot de passe.', 
					  )))
				->add('confirmationMdp', 'password', array('required'=>true, 
					  'attr'=>array('placeholder'=>'Votre nouveau mdp..', 
						 'title'=>'Veuillez spécifier votre nouveau mot de passe.', 
					  ))); 
			$form = $formBuilder->getForm(); 
			$request = $this->get('request'); 
			if ($request->getMethod() == 'POST')  
			{ 
				$form->bind($request); 
				if ($form->isValid())  
				{ 
					$repository = $this->getDoctrine()
						->getManager()
						->getRepository('BDSUtilisateurBundle:Utilisateur');
					$utilisateur = $repository->findOneByMail($mail) ;
					if ( ($utilisateur) && (sha1($utilisateur->getPassword()== $motDePasse)))
					{
						if ($utilisateurParMail->getPassword()== sha1($utilisateurParMail->getConfirmationMdp()))
						{
							$em = $this->getDoctrine()->getManager(); 
							$em->persist($utilisateurParMail); 
							$em->flush(); 
							return $this->redirect( $this->generateUrl('abi_utilisateur_login') ); 
						}
						return $this->render('BDSUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig',array('formulaire' =>$form->createView(),  
									  'message'=>"Mots de passe non identiques. Veuillez réessayer svp .",'mail'=>$mail,'mdp'=>$motDePasse)); 
						
						
					}
					return $this->redirect( $this->generateUrl('bds_utilisateur_mot_de_passe_oublie') ); 
					
				} 
				else 
				{ 
					return $this->render('BDSUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig',array('formulaire' =>$form->createView(),  
										  'message'=>"Formulaire invalide",'mail'=>$mail,'mdp'=>$motDePasse));
				} 
			}
			return $this->render('BDSUtilisateurBundle:Utilisateur:reinitialiserMotDePasse.html.twig',array('formulaire' =>$form->createView(),  
										  'message'=>"",'mail'=>$mail,'mdp'=>$motDePasse));
			//return $this->render('BDSUtilisateurBundle:Utilisateur:motDePasseOublie.html.twig',array('form' =>$form->createView(),'message'=>''));	
		}
	}
	
	
	//recuperer mdp effectue
	public function recupererMotDePasseEffectueAction()
    {
		return $this->render('BDSUtilisateurBundle:Utilisateur:recupMdpEffectue.html.twig');
	}
}
