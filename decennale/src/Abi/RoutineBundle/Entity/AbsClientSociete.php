<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsClientSociete
 *
 * @ORM\Table(name="abs_client_societe")
 * @ORM\Entity
 */
class AbsClientSociete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="so_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soId;

    /**
     * @var string
     *
     * @ORM\Column(name="so_ref", type="string", length=30, nullable=false)
     */
    private $soRef;

    /**
     * @var string
     *
     * @ORM\Column(name="so_raison_social", type="string", length=100, nullable=false)
     */
    private $soRaisonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="so_formjuridique", type="string", length=20, nullable=false)
     */
    private $soFormjuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="so_date_de_creation", type="string", length=20, nullable=false)
     */
    private $soDateDeCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="so_siret", type="string", length=30, nullable=false)
     */
    private $soSiret;

    /**
     * @var integer
     *
     * @ORM\Column(name="so_nb_salarier", type="integer", nullable=false)
     */
    private $soNbSalarier;

    /**
     * @var string
     *
     * @ORM\Column(name="so_chiffre_affaire", type="string", length=10, nullable=false)
     */
    private $soChiffreAffaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="so_etat", type="integer", nullable=false)
     */
    private $soEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="so_date", type="date", nullable=false)
     */
    private $soDate;


     /**
     * Get soId
     *
     * @return integer
     */
    public function getSoID()
    {
        return $this->soId;
    }

     /**
     * Set soId
     *
     * @param date $soId
     * @return AbsClientSociete
     */
    public function setSoID($soId)
    {
        $this->soId = $soId;

        return $this;
    }

    /**
     * Get soRef
     *
     * @return string
     */
    public function getSoRef()
    {
        return $this->soId;
    }

    /**
     * Set soRef
     *
     * @param string soRef
     * @return AbsClientSociete
     */
    public function setSoRef($soRef)
    {
        $this->soRef = $soRef;

        return $this;
    }

    /**
     * Get soRaisonSocial
     *
     * @return string
     */
    public function getSoRaisonSocial()
    {
        return $this->soRaisonSocial;
    }

    /**
     * Set soRaisonSocial
     *
     * @param string soRaisonSocial
     * @return AbsClientSociete
     */
    public function setSoRaisonSocial($soRaisonSocial)
    {
        $this->soRaisonSocial = $soRaisonSocial;

        return $this;
    }

    /**
     * Get soFormjuridique
     *
     * @return string
     */
    public function getSoFormjuridique()
    {
        return $this->soFormjuridique;
    }

     /**
     * Set soFormjuridique
     *
     * @param string soFormjuridique
     * @return AbsClientSociete
     */
    public function setSoFormjuridique($soFormjuridique)
    {
        $this->soFormjuridique = $soFormjuridique;

        return $this;
    }

    /**
     * Get soDateDeCreation
     *
     * @return string
     */
    public function getSoDateDeCreation()
    {
        return $this->soDateDeCreation;
    }

     /**
     * Set soDateDeCreation
     *
     * @param string soDateDeCreation
     * @return AbsClientSociete
     */
    public function setSoDateDeCreation($soDateDeCreation)
    {
        $this->soDateDeCreation = $soDateDeCreation;

        return $this;
    }
    /**
     * Get soSiret
     *
     * @return string
     */
    public function getSoSiret()
    {
        return $this->soSiret;
    }

    /**
     * Set soSiret
     *
     * @param string soSiret
     * @return AbsClientSociete
     */
    public function setSoSiret($soSiret)
    {
        $this->soSiret = $soSiret;

        return $this;
    }

    /**
     * Get soNbSalarier
     *
     * @return integer
     */
    public function getSoNbSalarier()
    {
        return $this->soNbSalarier;
    }

    /**
     * Set soNbSalarier
     *
     * @param integer soNbSalarier
     * @return AbsClientSociete
     */
    public function setSoNbSalarier($soNbSalarier)
    {
        $this->soNbSalarier = $soNbSalarier;

        return $this;
    }

    /**
     * Get soChiffreAffaire
     *
     * @return string
     */
    public function getSoChiffreAffaire()
    {
        return $this->soChiffreAffaire;
    }

    /**
     * Set soChiffreAffaire
     *
     * @param string soChiffreAffaire
     * @return AbsClientSociete
     */
    public function setSoChiffreAffaire($soChiffreAffaire)
    {
        $this->soChiffreAffaire = $soChiffreAffaire;

        return $this;
    }

    /**
     * Get soEtat
     *
     * @return integer
     */
    public function getSoEtat()
    {
        return $this->soEtat;
    }

    /**
     * Set soEtat
     *
     * @param  soEtat
     * @return AbsClientSociete
     */
    public function setSoEtat($soEtat)
    {
        $this->soEtat = $soEtat;

        return $this;
    }

    /**
     * Get soDate
     *
     * @return date
     */
    public function getSoDate()
    {
        return $this->soDate;
    }

    /**
     * Set soDate
     *
     * @param date soDate
     * @return AbsClientSociete
     */
    public function setSoDate($soDate)
    {
        $this->soDate = $soDate;

        return $this;
    }
}
