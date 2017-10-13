<?php

namespace Abi\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsConnexion
 *
 * @ORM\Table(name="abs_connexion")
 * @ORM\Entity(repositoryClass="Abi\UtilisateurBundle\Repository\AbsConnexionRepository")
 */
class AbsConnexion
{
  
    /**
     * @var integer
     *
     * @ORM\Column(name="conect_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conectId;
    /**
     * @var string
     *
     * @ORM\Column(name="conect_ref", type="string", length=30, nullable=false)
     */
    private $conectRef;
    /**
     * @var string
     *
     * @ORM\Column(name="conect_pseudo", type="string", length=100, nullable=false)
     */
    private $conectPseudo;
    /**
     * @var string
     *
     * @ORM\Column(name="conect_email", type="string", length=200, nullable=false)
     */
    private $conectEmail;
    /**
     * @var string
     *
     * @ORM\Column(name="conect_mdp", type="string", length=200, nullable=false)
     */
    private $conectMdp;
    /**
     * @var string
     *
     * @ORM\Column(name="conect_ip", type="string", length=200, nullable=false)
     */
    private $conectIp;
    /**
     * @var integer
     *
     * @ORM\Column(name="conect_etat", type="integer", nullable=false)
     */
    private $conectEtat;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="conect_date", type="date", nullable=false)
     */
    private $conectDate;

    /**
     * Get conectId
     *
     * @return integer 
     */
    public function getConectId()
    {
        return $this->conectId;
    }

    /**
     * Set conectRef
     *
     * @param string $conectRef
     * @return AbsConnexion
     */
    public function setConectRef($conectRef)
    {
        $this->conectRef = $conectRef;

        return $this;
    }

    /**
     * Get conectRef
     *
     * @return string 
     */
    public function getConectRef()
    {
        return $this->conectRef;
    }

    /**
     * Set conectPseudo
     *
     * @param string $conectPseudo
     * @return AbsConnexion
     */
    public function setConectPseudo($conectPseudo)
    {
        $this->conectPseudo = $conectPseudo;

        return $this;
    }

    /**
     * Get conectPseudo
     *
     * @return string 
     */
    public function getConectPseudo()
    {
        return $this->conectPseudo;
    }

    /**
     * Set conectEmail
     *
     * @param string $conectEmail
     * @return AbsConnexion
     */
    public function setConectEmail($conectEmail)
    {
        $this->conectEmail = $conectEmail;

        return $this;
    }

    /**
     * Get conectEmail
     *
     * @return string 
     */
    public function getConectEmail()
    {
        return $this->conectEmail;
    }

    /**
     * Set conectMdp
     *
     * @param string $conectMdp
     * @return AbsConnexion
     */
    public function setConectMdp($conectMdp)
    {
        $this->conectMdp = $conectMdp;

        return $this;
    }

    /**
     * Get conectMdp
     *
     * @return string 
     */
    public function getConectMdp()
    {
        return $this->conectMdp;
    }

    /**
     * Set conectIp
     *
     * @param string $conectIp
     * @return AbsConnexion
     */
    public function setConectIp($conectIp)
    {
        $this->conectIp = $conectIp;

        return $this;
    }

    /**
     * Get conectIp
     *
     * @return string 
     */
    public function getConectIp()
    {
        return $this->conectIp;
    }

    /**
     * Set conectEtat
     *
     * @param integer $conectEtat
     * @return AbsConnexion
     */
    public function setConectEtat($conectEtat)
    {
        $this->conectEtat = $conectEtat;

        return $this;
    }

    /**
     * Get conectEtat
     *
     * @return integer 
     */
    public function getConectEtat()
    {
        return $this->conectEtat;
    }

    /**
     * Set conectDate
     *
     * @param \DateTime $conectDate
     * @return AbsConnexion
     */
    public function setConectDate($conectDate)
    {
        $this->conectDate = $conectDate;

        return $this;
    }

    /**
     * Get conectDate
     *
     * @return \DateTime 
     */
    public function getConectDate()
    {
        return $this->conectDate;
    }
}
