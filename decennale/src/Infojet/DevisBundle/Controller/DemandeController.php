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
                        $user->setMail($demande->getMail()) ;
                    

                        $user->setClientNom($demande->getUsername()) ;
			$user->setClientCivilite($demande->getCivilite()) ; 
			
			$user->setClientPrenom($demande->getUserfirstname()) ;
			$user->setClientCp($demande->getCodePostal()) ;
			$user->setClientVille($demande->getVille()) ;
			$user->setClientAdresse($demande->getAdresseEntreprise()) ;
                        $user->setClientTel($demande->getTelephone()) ;
                        $d = date_create();
                        $user->setClientRef(date_format($d, 'Y-m-d H:i:s:ms'));
                     
                        $user->setClientDate($d);
                         $user->setClientNewsletter(0);
                        $userSo->setSoEtat(1);
                        $userSo->setSoDate($d);
                        $userCo->setConectIp($this->container->get('request')->getClientIp());
			$userSo->setSoRaisonSocial($demande->getRaisonSociale()) ;
			$userSo->setSoFormJuridique($demande->getFormeJuridique()) ;
			$userSo->setSoSiret($demande->getNumeroSiret()) ;
			$userSo->setSoDateDeCreation(date_format($demande->getDateCreation(),'Y-m-d') ) ;
			$userSo->setSoNbSalarier($demande->getNombreDeSalarie()) ;
			$userSo->setSoChiffreAffaire($demande->getChiffreAffaire()) ;
			
			
			$em = $this->getDoctrine()->getManager(); 
			$demande->validerMail() ;
                        $em->persist($userSo);
			$em->persist($user); 
			
			$em->flush(); 

			$mail = $user->getClientEMail() ;

                        $message= \Swift_Message::NewInstance()
                          ->SetSubject('Confirmation Devis')
                          ->SetTo($mail)
                          ->SetFrom('commercial@devis-decennale.fr')
                          ->SetContentType('text/html')
                          ->SetBody("Bonjour ".$user->getClientCivilite().":".$user->getClientPrenom()." ".$user->getClientNom().","."<p>Bienvenue sur devis-decennale.Vous venez de vous inscrire et nous sommes heureux de pouvoir vous compter aujourd'hui parmi nos Clients.
Veuillez conserver ce courrier électronique dans vos archives. Les informations concernant votre compte sont les suivantes :<br/>
\t Identifiant :<b>".$mail."</b><br/>
\t Mot de passe:<b>".$mdp."</b><br/>
Le mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé.<br/>
Dans le cas où vous l'oubliez, vous pourrez le réinitialiser en utilisant l'adresse de courrier électronique associée à votre compte Si vous souhaitez changer vos informations, rendez-vous dans votre compte pour les mettre à jour..
A très bientôt sur le site!<br/></p></br>
L'équipe de devis-decennale.");
                       $this->get('mailer')->send($message);

       		return $this->render('InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig', array('motDePasse'=>$mdp, 'mail'=>$mail));
		}

		return $this->render('InfojetDevisBundle:Demande:confirmerMailDemandeur.html.twig', array('motDePasse'=>$mdp, 'mail'=>$mail));
        
    }
}
