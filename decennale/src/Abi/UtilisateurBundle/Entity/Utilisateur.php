<?php

namespace Abi\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="Abi\UtilisateurBundle\Repository\UtilisateurRepository")
 */
class Utilisateur implements AdvancedUserInterface
{
     /**
    * @ORM\ManyToOne(targetEntity="Abi\UtilisateurBundle\Entity\TypeCompte")
    * @ORM\JoinColumn(nullable=true)
    */
    private $TypeCompte;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
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
     * @ORM\Column(name="utilisateur_password", type="string", length=255)
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
     * @ORM\Column(name="utilisateur_estEfface", type="boolean")
     * 
     */
    private $estEfface;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="utilisateur_estValide", type="boolean")
     * 
     */
    private $estValide;

     /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="userfirstname", type="string", length=255, nullable=true)
     */
    private $userfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=255)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEntreprise", type="string", length=255)
     */
    private $adresseEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonSociale", type="string", length=255)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="formeJuridique", type="string", length=255)
     */
    private $formeJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroSiret", type="string", length=255)
     */
    private $numeroSiret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreDeSalarie", type="string", length=255)
     */
    private $nombreDeSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="chiffreAffaire", type="string", length=255)
     */
    private $chiffreAffaire;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**********************************
    *       LES FONCTIONS      *
    **********************************/
    
    /*********************** 
    *       Symfony           *
    **********************/
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
        $this->setAccountNonLocked(true);
        $this->setEstEfface(false);
        $this->setEstValide(false);
        
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

    public function getEtat()
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
            if ($role == "ROLE_NIVEAU_2") { return true;}
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
        return $this->roles;
    }



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Utilisateur
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userfirstname
     *
     * @param string $userfirstname
     * @return Utilisateur
     */
    public function setUserfirstname($userfirstname)
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    /**
     * Get userfirstname
     *
     * @return string 
     */
    public function getUserfirstname()
    {
        return $this->userfirstname;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Utilisateur
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Utilisateur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresseEntreprise
     *
     * @param string $adresseEntreprise
     * @return Utilisateur
     */
    public function setAdresseEntreprise($adresseEntreprise)
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    /**
     * Get adresseEntreprise
     *
     * @return string 
     */
    public function getAdresseEntreprise()
    {
        return $this->adresseEntreprise;
    }

    /**
     * Set raisonSociale
     *
     * @param string $raisonSociale
     * @return Utilisateur
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string 
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set formeJuridique
     *
     * @param string $formeJuridique
     * @return Utilisateur
     */
    public function setFormeJuridique($formeJuridique)
    {
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * Get formeJuridique
     *
     * @return string 
     */
    public function getFormeJuridique()
    {
        return $this->formeJuridique;
    }

    /**
     * Set numeroSiret
     *
     * @param string $numeroSiret
     * @return Utilisateur
     */
    public function setNumeroSiret($numeroSiret)
    {
        $this->numeroSiret = $numeroSiret;

        return $this;
    }

    /**
     * Get numeroSiret
     *
     * @return string 
     */
    public function getNumeroSiret()
    {
        return $this->numeroSiret;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Utilisateur
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set nombreDeSalarie
     *
     * @param string $nombreDeSalarie
     * @return Utilisateur
     */
    public function setNombreDeSalarie($nombreDeSalarie)
    {
        $this->nombreDeSalarie = $nombreDeSalarie;

        return $this;
    }

    /**
     * Get nombreDeSalarie
     *
     * @return string 
     */
    public function getNombreDeSalarie()
    {
        return $this->nombreDeSalarie;
    }

    /**
     * Set chiffreAffaire
     *
     * @param string $chiffreAffaire
     * @return Utilisateur
     */
    public function setChiffreAffaire($chiffreAffaire)
    {
        $this->chiffreAffaire = $chiffreAffaire;

        return $this;
    }

    /**
     * Get chiffreAffaire
     *
     * @return string 
     */
    public function getChiffreAffaire()
    {
        return $this->chiffreAffaire;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Utilisateur
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set TypeCompte
     *
     * @param \Abi\UtilisateurBundle\Entity\TypeCompte $typeCompte
     * @return Utilisateur
     */
    public function setTypeCompte(\Abi\UtilisateurBundle\Entity\TypeCompte $typeCompte)
    {
        $this->TypeCompte = $typeCompte;

        return $this;
    }

    /**
     * Get TypeCompte
     *
     * @return \Abi\UtilisateurBundle\Entity\TypeCompte 
     */
    public function getTypeCompte()
    {
        return $this->TypeCompte;
    }

    /**
     * Set estEfface
     *
     * @param boolean $estEfface
     * @return Utilisateur
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
     * @return Utilisateur
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
}
