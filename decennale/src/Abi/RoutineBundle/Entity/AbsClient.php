<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsClient
 *
 * @ORM\Table(name="abs_client")
 * @ORM\Entity
 */
class AbsClient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $clientId;

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

    
    public function __construct()
    {
     
        $this->setClientEtat(1);    
    }
    
     /**
     * Get clientId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->clientId;
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


}
