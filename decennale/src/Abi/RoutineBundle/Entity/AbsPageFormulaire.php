<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageFormulaire
 *
 * @ORM\Table(name="abs_page_formulaire")
 * @ORM\Entity
 */
class AbsPageFormulaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pgflr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pgflrId;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_titre", type="string", length=150, nullable=false)
     */
    private $pgflrTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_description", type="string", length=400, nullable=false)
     */
    private $pgflrDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_slug", type="string", length=200, nullable=false)
     */
    private $pgflrSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgflr_refpage", type="integer", nullable=false)
     */
    private $pgflrRefpage;

    /**
     * @var string
     *
     * @ORM\Column(name="pgflr_type", type="string", length=200, nullable=false)
     */
    private $pgflrType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgflr_etat", type="integer", nullable=false)
     */
    private $pgflrEtat;



    /**
     * Get pgflrId
     *
     * @return integer 
     */
    public function getPgflrId()
    {
        return $this->pgflrId;
    }

    /**
     * Set pgflrTitre
     *
     * @param string $pgflrTitre
     * @return AbsPageFormulaire
     */
    public function setPgflrTitre($pgflrTitre)
    {
        $this->pgflrTitre = $pgflrTitre;

        return $this;
    }

    /**
     * Get pgflrTitre
     *
     * @return string 
     */
    public function getPgflrTitre()
    {
        return $this->pgflrTitre;
    }

    /**
     * Set pgflrDescription
     *
     * @param string $pgflrDescription
     * @return AbsPageFormulaire
     */
    public function setPgflrDescription($pgflrDescription)
    {
        $this->pgflrDescription = $pgflrDescription;

        return $this;
    }

    /**
     * Get pgflrDescription
     *
     * @return string 
     */
    public function getPgflrDescription()
    {
        return $this->pgflrDescription;
    }

    /**
     * Set pgflrSlug
     *
     * @param string $pgflrSlug
     * @return AbsPageFormulaire
     */
    public function setPgflrSlug($pgflrSlug)
    {
        $this->pgflrSlug = $pgflrSlug;

        return $this;
    }

    /**
     * Get pgflrSlug
     *
     * @return string 
     */
    public function getPgflrSlug()
    {
        return $this->pgflrSlug;
    }

    /**
     * Set pgflrRefpage
     *
     * @param integer $pgflrRefpage
     * @return AbsPageFormulaire
     */
    public function setPgflrRefpage($pgflrRefpage)
    {
        $this->pgflrRefpage = $pgflrRefpage;

        return $this;
    }

    /**
     * Get pgflrRefpage
     *
     * @return integer 
     */
    public function getPgflrRefpage()
    {
        return $this->pgflrRefpage;
    }

    /**
     * Set pgflrType
     *
     * @param string $pgflrType
     * @return AbsPageFormulaire
     */
    public function setPgflrType($pgflrType)
    {
        $this->pgflrType = $pgflrType;

        return $this;
    }

    /**
     * Get pgflrType
     *
     * @return string 
     */
    public function getPgflrType()
    {
        return $this->pgflrType;
    }

    /**
     * Set pgflrEtat
     *
     * @param integer $pgflrEtat
     * @return AbsPageFormulaire
     */
    public function setPgflrEtat($pgflrEtat)
    {
        $this->pgflrEtat = $pgflrEtat;

        return $this;
    }

    /**
     * Get pgflrEtat
     *
     * @return integer 
     */
    public function getPgflrEtat()
    {
        return $this->pgflrEtat;
    }
}
