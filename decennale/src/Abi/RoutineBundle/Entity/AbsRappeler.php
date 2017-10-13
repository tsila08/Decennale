<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsRappeler
 *
 * @ORM\Table(name="abs_rappeler")
 * @ORM\Entity
 */
class AbsRappeler
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rap_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rapId;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_nom", type="string", length=80, nullable=false)
     */
    private $rapNom;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_prenom", type="string", length=80, nullable=false)
     */
    private $rapPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_email", type="string", length=100, nullable=false)
     */
    private $rapEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_tel", type="string", length=20, nullable=false)
     */
    private $rapTel;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_dateappel", type="string", length=30, nullable=false)
     */
    private $rapDateappel;

    /**
     * @var string
     *
     * @ORM\Column(name="rap_heure", type="string", length=20, nullable=false)
     */
    private $rapHeure;

    /**
     * @var integer
     *
     * @ORM\Column(name="rap_etat", type="integer", nullable=false)
     */
    private $rapEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rap_date", type="date", nullable=false)
     */
    private $rapDate;



    /**
     * Get rapId
     *
     * @return integer 
     */
    public function getRapId()
    {
        return $this->rapId;
    }

    /**
     * Set rapNom
     *
     * @param string $rapNom
     * @return AbsRappeler
     */
    public function setRapNom($rapNom)
    {
        $this->rapNom = $rapNom;

        return $this;
    }

    /**
     * Get rapNom
     *
     * @return string 
     */
    public function getRapNom()
    {
        return $this->rapNom;
    }

    /**
     * Set rapPrenom
     *
     * @param string $rapPrenom
     * @return AbsRappeler
     */
    public function setRapPrenom($rapPrenom)
    {
        $this->rapPrenom = $rapPrenom;

        return $this;
    }

    /**
     * Get rapPrenom
     *
     * @return string 
     */
    public function getRapPrenom()
    {
        return $this->rapPrenom;
    }

    /**
     * Set rapEmail
     *
     * @param string $rapEmail
     * @return AbsRappeler
     */
    public function setRapEmail($rapEmail)
    {
        $this->rapEmail = $rapEmail;

        return $this;
    }

    /**
     * Get rapEmail
     *
     * @return string 
     */
    public function getRapEmail()
    {
        return $this->rapEmail;
    }

    /**
     * Set rapTel
     *
     * @param string $rapTel
     * @return AbsRappeler
     */
    public function setRapTel($rapTel)
    {
        $this->rapTel = $rapTel;

        return $this;
    }

    /**
     * Get rapTel
     *
     * @return string 
     */
    public function getRapTel()
    {
        return $this->rapTel;
    }

    /**
     * Set rapDateappel
     *
     * @param string $rapDateappel
     * @return AbsRappeler
     */
    public function setRapDateappel($rapDateappel)
    {
        $this->rapDateappel = $rapDateappel;

        return $this;
    }

    /**
     * Get rapDateappel
     *
     * @return string 
     */
    public function getRapDateappel()
    {
        return $this->rapDateappel;
    }

    /**
     * Set rapHeure
     *
     * @param string $rapHeure
     * @return AbsRappeler
     */
    public function setRapHeure($rapHeure)
    {
        $this->rapHeure = $rapHeure;

        return $this;
    }

    /**
     * Get rapHeure
     *
     * @return string 
     */
    public function getRapHeure()
    {
        return $this->rapHeure;
    }

    /**
     * Set rapEtat
     *
     * @param integer $rapEtat
     * @return AbsRappeler
     */
    public function setRapEtat($rapEtat)
    {
        $this->rapEtat = $rapEtat;

        return $this;
    }

    /**
     * Get rapEtat
     *
     * @return integer 
     */
    public function getRapEtat()
    {
        return $this->rapEtat;
    }

    /**
     * Set rapDate
     *
     * @param \DateTime $rapDate
     * @return AbsRappeler
     */
    public function setRapDate($rapDate)
    {
        $this->rapDate = $rapDate;

        return $this;
    }

    /**
     * Get rapDate
     *
     * @return \DateTime 
     */
    public function getRapDate()
    {
        return $this->rapDate;
    }
}
