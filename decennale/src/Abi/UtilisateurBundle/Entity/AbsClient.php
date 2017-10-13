<?php

namespace Abi\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AbsClient
 *
 * @ORM\Table(name="abs_client")
 * @ORM\Entity(repositoryClass="Abi\UtilisateurBundle\Repository\AbsClientRepository")
 */
class AbsClient implements AdvancedUserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $clientId;
    /**
     * @var bool
     *
     * @ORM\Column(name="utilisateur_accountNonLocked", type="boolean")
     * 
     */
    private $accountNonLocked;

     /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var array
     *
     * @ORM\Column(name="utilisateur_roles", type="array")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="client_ref", type="string", length=30, nullable=false)
     */
    private $clientRef;

    /**
     * @var string
     *
     * @ORM\Column(name="client_civilite", type="string", length=4, nullable=false)
     */
    private $clientCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="client_nom", type="string", length=50, nullable=false)
     */
    private $clientNom;
    private $username;
    private $userfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="client_prenom", type="string", length=50, nullable=false)
     */
    private $clientPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="client_email", type="string", length=200, nullable=false)
     */
    private $clientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="client_tel", type="string", length=20, nullable=false)
     */
    private $clientTel;

    /**
     * @var string
     *
     * @ORM\Column(name="client_cp", type="string", length=10, nullable=false)
     */
    private $clientCp;

    /**
     * @var string
     *
     * @ORM\Column(name="client_ville", type="string", length=100, nullable=false)
     */
    private $clientVille;

    /**
     * @var string
     *
     * @ORM\Column(name="client_adresse", type="string", length=200, nullable=false)
     */
    private $clientAdresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_etat", type="integer", nullable=false)
     */
    private $clientEtat;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_newsletter", type="integer", nullable=true)
     */
    private $clientNewsletter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="client_date", type="date", nullable=false)
     */
    private $clientDate;

   
    
     /**
     * Get clientId
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

     public function setClientId($id)
    {
         $this->clientId = $id;

         $clientRef =  "c"+ md5($id) ;
         $this->setClientRef($clientRef) ;
         return $this ;
         
    }

    /**
     * Get clientRef
     *
     * @return string
     */
    public function getClientRef()
    {
        return $this->clientRef;
    }

     /**
     * Set clientRef
     *
     * @param date $clientRef
     * @return AbsClient
     */
    public function setClientRef($clientRef)
    {
        $this->clientRef = $clientRef;

        return $this;
    }

     /**
     * Get clientCivilite
     *
     * @return string
     */
    public function getClientCivilite()
    {
        return $this->clientCivilite;
    }

     /**
     * Set clientCivilite
     *
     * @param string $clientCivilite
     * @return AbsClient
     */
    public function setClientCivilite($clientCivilite)
    {
        $this->clientCivilite = $clientCivilite;

        return $this;
    }

    
     /**
     * Get clientNom
     *
     * @return string
     */
    public function getClientNom()
    {
        return $this->clientNom;
    }

     /**
     * Set clientNom
     *
     * @param string $clientNom
     * @return AbsClient
     */
    public function setClientNom($clientNom)
    {
        $this->clientNom = $clientNom;

        return $this;
    }

    
        
     /**
     * Get clientPrenom
     *
     * @return string
     */
    public function getClientPrenom()
    {
        return $this->clientPrenom;
    }

     /**
     * Set clientPrenom
     *
     * @param string $clientPrenom
     * @return AbsClient
     */
    public function setClientPrenom($clientPrenom)
    {
        $this->clientPrenom = $clientPrenom;

        return $this;
    }

    /**
     * Get clientEmail
     *
     * @return string
     */
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

     /**
     * Set clientEmail
     *
     * @param string $clientEmail
     * @return AbsClient
     */
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    /**
     * Get clientTel
     *
     * @return string
     */
    public function getClientTel()
    {
        return $this->clientTel;
    }

    /**
     * Set clientTel
     *
     * @param string $clientTel
     * @return AbsClient
     */
    public function setClientTel($clientTel)
    {
        $this->clientTel = $clientTel;

        return $this;
    }
  
    /**
     * Get clientCp
     *
     * @return string
     */
    public function getClientCp()
    {
        return $this->clientCp;
    }

    /**
     * Set clientCp
     *
     * @param string $clientCp
     * @return AbsClient
     */
    public function setClientCp($clientCp)
    {
        $this->clientCp= $clientCp;

        return $this;
    }

    /**
     * Get clientVille
     *
     * @return string
     */
    public function getClientVille()
    {
        return $this->clientVille;
    }

    /**
     * Set clientVille
     *
     * @param string $clientVille
     * @return AbsClient
     */
    public function setClientVille($clientVille)
    {
        $this->clientVille= $clientVille;

        return $this;
    }

    
    /**
     * Get clientAdresse
     *
     * @return string
     */
    public function getClientAdresse()
    {
        return $this->clientAdresse;
    }

    /**
     * Set clientAdresse
     *
     * @param string $clientAdresse
     * @return AbsClient
     */
    public function setClientAdresse($clientAdresse)
    {
        $this->clientAdresse= $clientAdresse;

        return $this;
    }

      
    /**
     * Get clientEtat
     *
     * @return integer
     */
    public function getClientEtat()
    {
        return $this->clientEtat;
    }

    /**
     * Set clientEtat
     *
     * @param integer $clientInteger
     * @return AbsClient
     */
    public function setClientEtat($clientEtat)
    {
        $this->clientEtat= $clientEtat;

        return $this;
    }

    /**
     * Get clientNewsletter
     *
     * @return integer
     */
    public function getClientNewsletter()
    {
        return $this->clientNewsletter;
    }

    /**
     * Set clientNewsletter
     *
     * @param integer $clientNewsletter
     * @return AbsClient
     */
    public function setClientNewsletter($clientNewsletter)
    {
        $this->clientNewsletter= $clientNewsletter;

        return $this;
    }

    /**
     * Get clientDate
     *
     * @return date
     */
    public function getClientDate()
    {
        return $this->clientDate;
    }

    /**
     * Set clientDate
     *
     * @param date $clientDate
     * @return AbsClient
     */
    public function setClientDate($clientDate)
    {
        $this->clientDate= $clientDate;

        return $this;
    }


    /**********************************
    *       ABI                      *
    **********************************/
    
    /*********************** 
    *       Symfony           *
    **********************/
     /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_password", type="string", length=255,nullable=true)
     *@Assert\Length(min=4,max=100)
     */
    private $password;
    private $oldPassword;
    private $confirmationMdp ;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateur_photoProfil", type="string", length=255, nullable=true)
     */
    private $photoProfil;
    
    private $photoProfilModifier;
    /**
     * @var bool
     *
     * @ORM\Column(name="utilisateur_estEfface", type="boolean",nullable=true)
     * 
     */
    private $estEfface;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="utilisateur_estValide", type="boolean",nullable=true)
     * 
     */
    private $estValide;
    
    public function setUsername($username)
    {
        $this->clientNom = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->clientNom;
    }

    public function setUserfirstname($userfirstname)
    {
        $this->clientPrenom = $userfirstname;

        return $this;
    }

    /**
     * Get userfirstname
     *
     * @return string 
     */
    public function getUserfirstname()
    {
        return $this->clientPrenom;
    }

    public function setMail($mail)
    {
        $this->clientEmail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->clientEmail;
    }
    public function eraseCredentials()
    {
    }
    public function isAccountNonLocked()
    {
        return $this->accountNonLocked;
    }
    public function isAccountNonExpired(){return true ;}
    public function isCredentialsNonExpired()
    {
        if($this->estEfface)
        {
            return false ;
        }
        return true ;
    }
    public function isEnabled(){return true ;}

    /**
          * Constructor
         */
    public function __construct()
    {
       $this->setClientEtat(1); 

        $this->setAccountNonLocked(true);
        $this->setEstEfface(false);
        $this->setEstValide(true);
        $this->setRoles(array("ROLE_CLIENT")) ;
        
    }
    

    public function Bloquer()
    {
        $this->setAccountNonLocked(false);
        return $this;
    }
    public function Debloquer()
    {
        $this->setAccountNonLocked(true);
        return $this;
    }
    public function Effacer()
    {
        $this->setEstEfface(true);
        return $this;
    }
    
    public function Valider($role)
    {
        $this->setEstValide(true);
        $this->setRoles($role) ;
        return $this;
    }
    public function uploadPhotoProfil()
    {
        if (null === $this->photoProfil) 
        {
            return;
        }
        $name = sha1(uniqid(mt_rand(), true)).'.'.$this->photoProfil->guessExtension();
        $valideExtension= array('JPG','JPEG','PNG') ;
        $extension = strtoupper($this->photoProfil->guessExtension()) ;
        if (in_array($extension, $valideExtension))
        {
            $this->photoProfil->move($this->getUploadRootDir(), $name);
            $this->photoProfil= $name;
        }
        else
        {
            $this->photoProfil = null ;
        }
        return ;
        
    }
    public function uploadPhotoProfilModifier()
    {
        if (null === $this->photoProfilModifier) 
        {
            return;
        }
        
        $name = sha1(uniqid(mt_rand(), true)).'.'.$this->photoProfilModifier->guessExtension();
        $this->photoProfilModifier->move($this->getUploadRootDir(), $name);
        $this->photoProfil = $name;

    }
    public function getUploadDir()
    {
        return 'photo/Utilisateur';
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    protected function getUploadRootDirFromEntity()
    {
        return __DIR__.'/../../../../../../web/'.$this->getUploadDir();
    }
    

/*  *******************************************
*           GETTER  et SETTER           *
*********************************************/

    public function getEtatString()
    {
        if ( $this->getEstEfface()) {return "Efface" ; }
        if ($this->accountNonLocked == false) {return "Bloque" ; }
        return "Autorise" ;
    }
    public function estADeBloquer()
    {
        
        return !$this->accountNonLocked;
    }
    /* peut valider publication
    * return boolean
    */
    public function peutValider()
    {
        foreach ($this->roles as $role)
        {
            if ($role == "ROLE_ADMIN") { return true;}
        }
        return false ;
    }
    /* peut ajouter utilisateur (tout role sauf admin. L ajout d un admin doit se faire directement via la base de donnees)
    * return boolean
    */
    public function peutAjouter()
    {
        foreach ($this->roles as $role)
        {
            if (($role == "ROLE_NIVEAU_B")||($role == "ROLE_ADMIN")) { return true;}
        }
        return false ;
    }
    
    /* get role string
    * return string
    */
    public function getPrivilege()
    {
        return $this->getTypeCompte()->getPrivilege() ;
    }
    /**
     * Set accountNonLocked
     *
     * @param \boolean $accountNonLocked
     * @return Utilisateur
     */
    public function setAccountNonLocked($accountNonLocked)
    {
        $this->accountNonLocked = $accountNonLocked;

        return $this;
    }

    /**
     * Get accountNonLocked
     *
     * @return \bool
     */
    public function getAccountNonLocked()
    {
        return $this->accountNonLocked;
    }
    public function estBloque()
    {
        return !$this->accountNonLocked ;
    }
     /**
     * Set photoProfil
     *
     * @param string $photoProfil
     * @return Utilisateur
     */
    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;
        $this->uploadPhotoProfil();
        return $this;
    }

    /**
     * Get photoProfil
     *
     * @return string 
     */
    public function getPhotoProfil()
    {
        return $this->photoProfil;
    }
    /**
     * Set photoProfilModifier
     *
     * @param string $photoProfilModifier
     * @return Utilisateur
     */
    public function setPhotoProfilModifier($photoProfilModifier)
    {
        $this->photoProfilModifier = $photoProfilModifier;
        $this->uploadPhotoProfilModifier();
        return $this;
    }
     /**
     * Get photoProfilModifier
     *
     * @return string 
     */
    public function getPhotoProfilModifier()
    {
        return $this->photoProfilModifier;
    }
     /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
       $this->password = sha1($password);
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function setOldPassword($oldPassword)
    {
       $this->oldPassword = sha1($oldPassword);
        return $this;
    }

    public function getOldPassword()
    {
        return $this->oldPassword;
    }
    public function setConfirmationMdp($confirmationMdp)
    {
        $this->confirmationMdp = $confirmationMdp;

        return $this;
    }
    public function getconfirmationMdp()
    {
        return $this->confirmationMdp;
    }
    
    /**
     * Set salt
     *
     * @param string $salt
     * @return Utilisateur
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set roles
     *
     * @param array $roles
     * @return Utilisateur
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        
        return $this;
    }

    /**
     * Get roles
     *
     * @return array 
     */
    public function getRoles()
    {
        /*if ($this->roles){
            return $this->roles ;
        }
        $role = array("ROLE_CLIENT");*/
        $this->setRoles($role) ;
        return $role ;
    }



    /**
     * Set estEfface
     *
     * @param boolean $estEfface
     * @return AbsClient
     */
    public function setEstEfface($estEfface)
    {
        $this->estEfface = $estEfface;

        return $this;
    }

    /**
     * Get estEfface
     *
     * @return boolean 
     */
    public function getEstEfface()
    {
        return $this->estEfface;
    }

    /**
     * Set estValide
     *
     * @param boolean $estValide
     * @return AbsClient
     */
    public function setEstValide($estValide)
    {
        $this->estValide = $estValide;

        return $this;
    }

    /**
     * Get estValide
     *
     * @return boolean 
     */
    public function getEstValide()
    {
        return $this->estValide;
    }

    /***************************
    *       FONCTIONS         *
    **************************/

    //CECI DOIT OBLIGATOIREMENT ETRE REMPLACER
    public function getSocieteFromRequest($societeRepository)
    {
        $societe = $societeRepository->findOneBy(array('soRef' =>$this->getClientRef())) ;
        return $societe ;
    }
}
