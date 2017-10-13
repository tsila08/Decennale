<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisCompagniePrecedente
 *
 * @ORM\Table(name="devis_compagnie_precedente")
 * @ORM\Entity
 */
class DevisCompagniePrecedente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cogprId;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_refdevs", type="string", length=35, nullable=false)
     */
    private $cogprRefdevs;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_nom_compagnie", type="string", length=200, nullable=false)
     */
    private $cogprNomCompagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_type_contrat", type="string", length=200, nullable=false)
     */
    private $cogprTypeContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_numero_contrat", type="string", length=200, nullable=false)
     */
    private $cogprNumeroContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_date_souscription", type="string", length=20, nullable=false)
     */
    private $cogprDateSouscription;

    /**
     * @var string
     *
     * @ORM\Column(name="cogpr_date_resiliation", type="string", length=20, nullable=false)
     */
    private $cogprDateResiliation;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_nb_sinistres", type="integer", nullable=false)
     */
    private $cogprNbSinistres;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_tot_sinistres", type="integer", nullable=false)
     */
    private $cogprTotSinistres;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_resilie_non_paiement", type="integer", nullable=false)
     */
    private $cogprResilieNonPaiement;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_resilie_fausse_declaration", type="integer", nullable=false)
     */
    private $cogprResilieFausseDeclaration;

    /**
     * @var integer
     *
     * @ORM\Column(name="cogpr_resilie_sinistre", type="integer", nullable=false)
     */
    private $cogprResilieSinistre;



    /**
     * Get cogprId
     *
     * @return integer 
     */
    public function getCogprId()
    {
        return $this->cogprId;
    }

    /**
     * Set cogprRefdevs
     *
     * @param string $cogprRefdevs
     * @return DevisCompagniePrecedente
     */
    public function setCogprRefdevs($cogprRefdevs)
    {
        $this->cogprRefdevs = $cogprRefdevs;

        return $this;
    }

    /**
     * Get cogprRefdevs
     *
     * @return string 
     */
    public function getCogprRefdevs()
    {
        return $this->cogprRefdevs;
    }

    /**
     * Set cogprNomCompagnie
     *
     * @param string $cogprNomCompagnie
     * @return DevisCompagniePrecedente
     */
    public function setCogprNomCompagnie($cogprNomCompagnie)
    {
        $this->cogprNomCompagnie = $cogprNomCompagnie;

        return $this;
    }

    /**
     * Get cogprNomCompagnie
     *
     * @return string 
     */
    public function getCogprNomCompagnie()
    {
        return $this->cogprNomCompagnie;
    }

    /**
     * Set cogprTypeContrat
     *
     * @param string $cogprTypeContrat
     * @return DevisCompagniePrecedente
     */
    public function setCogprTypeContrat($cogprTypeContrat)
    {
        $this->cogprTypeContrat = $cogprTypeContrat;

        return $this;
    }

    /**
     * Get cogprTypeContrat
     *
     * @return string 
     */
    public function getCogprTypeContrat()
    {
        return $this->cogprTypeContrat;
    }

    /**
     * Set cogprNumeroContrat
     *
     * @param string $cogprNumeroContrat
     * @return DevisCompagniePrecedente
     */
    public function setCogprNumeroContrat($cogprNumeroContrat)
    {
        $this->cogprNumeroContrat = $cogprNumeroContrat;

        return $this;
    }

    /**
     * Get cogprNumeroContrat
     *
     * @return string 
     */
    public function getCogprNumeroContrat()
    {
        return $this->cogprNumeroContrat;
    }

    /**
     * Set cogprDateSouscription
     *
     * @param string $cogprDateSouscription
     * @return DevisCompagniePrecedente
     */
    public function setCogprDateSouscription($cogprDateSouscription)
    {
        $this->cogprDateSouscription = $cogprDateSouscription;

        return $this;
    }

    /**
     * Get cogprDateSouscription
     *
     * @return string 
     */
    public function getCogprDateSouscription()
    {
        return $this->cogprDateSouscription;
    }

    /**
     * Set cogprDateResiliation
     *
     * @param string $cogprDateResiliation
     * @return DevisCompagniePrecedente
     */
    public function setCogprDateResiliation($cogprDateResiliation)
    {
        $this->cogprDateResiliation = $cogprDateResiliation;

        return $this;
    }

    /**
     * Get cogprDateResiliation
     *
     * @return string 
     */
    public function getCogprDateResiliation()
    {
        return $this->cogprDateResiliation;
    }

    /**
     * Set cogprNbSinistres
     *
     * @param integer $cogprNbSinistres
     * @return DevisCompagniePrecedente
     */
    public function setCogprNbSinistres($cogprNbSinistres)
    {
        $this->cogprNbSinistres = $cogprNbSinistres;

        return $this;
    }

    /**
     * Get cogprNbSinistres
     *
     * @return integer 
     */
    public function getCogprNbSinistres()
    {
        return $this->cogprNbSinistres;
    }

    /**
     * Set cogprTotSinistres
     *
     * @param integer $cogprTotSinistres
     * @return DevisCompagniePrecedente
     */
    public function setCogprTotSinistres($cogprTotSinistres)
    {
        $this->cogprTotSinistres = $cogprTotSinistres;

        return $this;
    }

    /**
     * Get cogprTotSinistres
     *
     * @return integer 
     */
    public function getCogprTotSinistres()
    {
        return $this->cogprTotSinistres;
    }

    /**
     * Set cogprResilieNonPaiement
     *
     * @param integer $cogprResilieNonPaiement
     * @return DevisCompagniePrecedente
     */
    public function setCogprResilieNonPaiement($cogprResilieNonPaiement)
    {
        $this->cogprResilieNonPaiement = $cogprResilieNonPaiement;

        return $this;
    }

    /**
     * Get cogprResilieNonPaiement
     *
     * @return integer 
     */
    public function getCogprResilieNonPaiement()
    {
        return $this->cogprResilieNonPaiement;
    }

    /**
     * Set cogprResilieFausseDeclaration
     *
     * @param integer $cogprResilieFausseDeclaration
     * @return DevisCompagniePrecedente
     */
    public function setCogprResilieFausseDeclaration($cogprResilieFausseDeclaration)
    {
        $this->cogprResilieFausseDeclaration = $cogprResilieFausseDeclaration;

        return $this;
    }

    /**
     * Get cogprResilieFausseDeclaration
     *
     * @return integer 
     */
    public function getCogprResilieFausseDeclaration()
    {
        return $this->cogprResilieFausseDeclaration;
    }

    /**
     * Set cogprResilieSinistre
     *
     * @param integer $cogprResilieSinistre
     * @return DevisCompagniePrecedente
     */
    public function setCogprResilieSinistre($cogprResilieSinistre)
    {
        $this->cogprResilieSinistre = $cogprResilieSinistre;

        return $this;
    }

    /**
     * Get cogprResilieSinistre
     *
     * @return integer 
     */
    public function getCogprResilieSinistre()
    {
        return $this->cogprResilieSinistre;
    }
}
