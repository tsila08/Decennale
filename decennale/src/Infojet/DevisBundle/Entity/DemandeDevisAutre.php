<?php

namespace Infojet\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeDevisAutre
 *
 * @ORM\Table(name="demande_devis_autre")
 * @ORM\Entity(repositoryClass="Infojet\DevisBundle\Repository\DemandeDevisAutreRepository")
 */
class DemandeDevisAutre
{
    
    /**
    * @ORM\ManyToOne(targetEntity="Abi\UtilisateurBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=true)
    */
    private $Demandeur;
    /**
    * @ORM\ManyToMany(targetEntity="Infojet\DevisBundle\Entity\Risque")
    */
    private $risques;
    /**
    * @ORM\ManyToOne(targetEntity="Infojet\DevisBundle\Entity\Echeance")
    * @ORM\JoinColumn(nullable=true)
    */
    private $Echeance;
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
     * @ORM\Column(name="estMailValideParDemandeur", type="boolean", nullable=false)
     */
    private $estMailValideParDemandeur;

    /**
     * @var bool
     *
     * @ORM\Column(name="estLuParAdmin", type="boolean", nullable=false)
     */
    private $estLuParAdmin;
    /**
     * @var string
     *
     * @ORM\Column(name="codeConfirmation", type="string", nullable=true)
     */
    private $codeConfirmation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDemande", type="datetime")
     */
    private $dateDemande;

    /**
     * @var bool
     *
     * @ORM\Column(name="estDejaAssure", type="boolean")
     */
    private $estDejaAssure;

    /**
     * @var bool
     *
     * @ORM\Column(name="estPlusTrentePourcentSoustraitance", type="boolean")
     */
    private $estPlusTrentePourcentSoustraitance;

    /**
     * @var bool
     *
     * @ORM\Column(name="estRepriseDuPasse", type="boolean")
     */
    private $estRepriseDuPasse;

    /**
     * @var bool
     *
     * @ORM\Column(name="estRedressementJudiciare", type="boolean")
     */
    private $estRedressementJudiciare;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEffet", type="date")
     */
    private $dateEffet;

    /* les champs temporaires */

    
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
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return DemandeDevisAutre
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
     * Set username
     *
     * @param string $username
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
     */
    public function setChiffreAffaire($chiffreAffaire)
    {
        $this->chiffreAffaire = $chiffreAffaire;

        return $this;
    }

    /**********************
    *   Les fonctions    *
    *********************/
    public function validerMail(){
        $this->setEstMailValideParDemandeur(true) ;
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
     * @return DemandeDevisAutre
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
     * @return DemandeDevisAutre
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
    /* fin champ temporaires */

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
     * Set dateDemande
     *
     * @param \DateTime $dateDemande
     * @return DemandeDevisAutre
     */
    public function setDateDemande($dateDemande)
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    /**
     * Get dateDemande
     *
     * @return \DateTime 
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }

    /**
     * Set estDejaAssure
     *
     * @param boolean $estDejaAssure
     * @return DemandeDevisAutre
     */
    public function setEstDejaAssure($estDejaAssure)
    {
        $this->estDejaAssure = $estDejaAssure;

        return $this;
    }

    /**
     * Get estDejaAssure
     *
     * @return boolean 
     */
    public function getEstDejaAssure()
    {
        return $this->estDejaAssure;
    }

    /**
     * Set estPlusTrentePourcentSoustraitance
     *
     * @param boolean $estPlusTrentePourcentSoustraitance
     * @return DemandeDevisAutre
     */
    public function setEstPlusTrentePourcentSoustraitance($estPlusTrentePourcentSoustraitance)
    {
        $this->estPlusTrentePourcentSoustraitance = $estPlusTrentePourcentSoustraitance;

        return $this;
    }

    /**
     * Get estPlusTrentePourcentSoustraitance
     *
     * @return boolean 
     */
    public function getEstPlusTrentePourcentSoustraitance()
    {
        return $this->estPlusTrentePourcentSoustraitance;
    }

    /**
     * Set estRepriseDuPasse
     *
     * @param boolean $estRepriseDuPasse
     * @return DemandeDevisAutre
     */
    public function setEstRepriseDuPasse($estRepriseDuPasse)
    {
        $this->estRepriseDuPasse = $estRepriseDuPasse;

        return $this;
    }

    /**
     * Get estRepriseDuPasse
     *
     * @return boolean 
     */
    public function getEstRepriseDuPasse()
    {
        return $this->estRepriseDuPasse;
    }

    /**
     * Set estRedressementJudiciare
     *
     * @param boolean $estRedressementJudiciare
     * @return DemandeDevisAutre
     */
    public function setEstRedressementJudiciare($estRedressementJudiciare)
    {
        $this->estRedressementJudiciare = $estRedressementJudiciare;

        return $this;
    }

    /**
     * Get estRedressementJudiciare
     *
     * @return boolean 
     */
    public function getEstRedressementJudiciare()
    {
        return $this->estRedressementJudiciare;
    }

    /**
     * Set dateEffet
     *
     * @param \DateTime $dateEffet
     * @return DemandeDevisAutre
     */
    public function setDateEffet($dateEffet)
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * Get dateEffet
     *
     * @return \DateTime 
     */
    public function getDateEffet()
    {
        return $this->dateEffet;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateDemande = new \DateTime() ;
        $this->estMailValideParDemandeur = false ;
        $this->estLuParAdmin = false ;
    }

   


    /**
     * Set Echeance
     *
     * @param \Infojet\DevisBundle\Entity\Echeance $echeance
     * @return DemandeDevisAutre
     */
    public function setEcheance(\Infojet\DevisBundle\Entity\Echeance $echeance = null)
    {
        $this->Echeance = $echeance;

        return $this;
    }

    /**
     * Get Echeance
     *
     * @return \Infojet\DevisBundle\Entity\Echeance 
     */
    public function getEcheance()
    {
        return $this->Echeance;
    }

    /**
     * Add risques
     *
     * @param \Infojet\DevisBundle\Entity\Risque $risques
     * @return DemandeDevisAutre
     */
    public function addRisque(\Infojet\DevisBundle\Entity\Risque $risques)
    {
        $this->risques[] = $risques;

        return $this;
    }

    /**
     * Remove risques
     *
     * @param \Infojet\DevisBundle\Entity\Risque $risques
     */
    public function removeRisque(\Infojet\DevisBundle\Entity\Risque $risques)
    {
        $this->risques->removeElement($risques);
    }

    /**
     * Get risques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRisques()
    {
        return $this->risques;
    }

    /**
     * Set Demandeur
     *
     * @param \Abi\UtilisateurBundle\Entity\Utilisateur $demandeur
     * @return DemandeDevisAutre
     */
    public function setDemandeur(\Abi\UtilisateurBundle\Entity\Utilisateur $demandeur = null)
    {
        $this->Demandeur = $demandeur;

        return $this;
    }

    /**
     * Get Demandeur
     *
     * @return \Abi\UtilisateurBundle\Utilisateur 
     */
    public function getDemandeur()
    {
        return $this->Demandeur;
    }

    /**
     * Set estMailValideParDemandeur
     *
     * @param boolean $estMailValideParDemandeur
     * @return DemandeDevisAutre
     */
    public function setEstMailValideParDemandeur($estMailValideParDemandeur)
    {
        $this->estMailValideParDemandeur = $estMailValideParDemandeur;

        return $this;
    }

    /**
     * Get estMailValideParDemandeur
     *
     * @return boolean 
     */
    public function getEstMailValideParDemandeur()
    {
        return $this->estMailValideParDemandeur;
    }

    /**
     * Set estLuParAdmin
     *
     * @param boolean $estLuParAdmin
     * @return DemandeDevisAutre
     */
    public function setEstLuParAdmin($estLuParAdmin)
    {
        $this->estLuParAdmin = $estLuParAdmin;

        return $this;
    }

    /**
     * Get estLuParAdmin
     *
     * @return boolean 
     */
    public function getEstLuParAdmin()
    {
        return $this->estLuParAdmin;
    }

    /**
     * Set codeConfirmation
     *
     * @param string $codeConfirmation
     * @return DemandeDevisAutre
     */
    public function setCodeConfirmation($codeConfirmation)
    {
        $this->codeConfirmation = $codeConfirmation;

        return $this;
    }

    /**
     * Get codeConfirmation
     *
     * @return string 
     */
    public function getCodeConfirmation()
    {
        return $this->codeConfirmation;
    }
}
