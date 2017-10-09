<?php

namespace Infojet\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Abi\UtilisateurBundle\Entity\AbsClient;
use Abi\UtilisateurBundle\Entity\AbsClientSociete;

class DemandeController extends Controller
{
    
	public function demanderConfirmationMailAction($mail)
    {
       
		return $this->render('InfojetDevisBundle:Demande:confirmationMailDemandeur.html.twig', array('mail'=>$mail));
        
    }

    public function confirmerMailAction($id_demande,$code_validation)
    {
        $d_repository = $this->getDoctrine()
					->getManager()
					->getRepository('InfojetDevisBundle:DemandeDevisAutre');
		$demande = $d_repository->findOneByid($id_demande) ;
		if (($demande) &&($code_validation==$demande->getCodeConfirmation())){
			$user = new AbsClient() ;
			$userSo=new AbsClientSociete();
			$user->setClientEmail($demande->getMail()) ;
			$mdp = mt_rand(1000,999999) ;
			$user->setPassword($mdp) ;
			$user->setClientCivilite($demande->getCivilite()) ; 
			$user->setClientNom($demande->getUsername()) ;
			$user->setClientPrenom($demande->getUserfirstname()) ;
			$user->setClientCp($demande->getCodePostal()) ;
			$user->setClientVille($demande->getVille()) ;
			$user->setClientAdresse($demande->getAdresseEntreprise()) ;
                        $d = date_create();
                        $user->setClientRef(date_format($d, 'Y-m-d H:i:s:ms'));
                        $userSo->setSoRef(date_format($d, 'Y-m-d H:i:s:ms'));
                        
			$userSo->setSoRaisonSocial($demande->getRaisonSociale()) ;
			$userSo->setSoFormJuridique($demande->getFormeJuridique()) ;
			$userSo->setSoSiret($demande->getNumeroSiret()) ;
			$userSo->setSoDate($demande->getDateCreation()) ;
			$userSo->setSoNbSalarier($demande->getNombreDeSalarie()) ;
			$userSo->setSoChiffreAffaire($demande->getChiffreAffaire()) ;
			//$userSo->setTelephone($demande->getTelephone()) ;
			//$user->setSalt("") ;
			$em = $this->getDoctrine()->getManager(); 
			$demande->validerMail() ;
			$em->persist($user); 
$em->persist($userSo);
			$em->flush(); 

			$mail = $user->getMail() ;

       		return $this->render('InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig', array('motDePasse'=>$mdp, 'mail'=>$mail));
		}
		return $this->render('InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig', array('motDePasse'=>$mdp, 'mail'=>$mail));
        
    }
}
