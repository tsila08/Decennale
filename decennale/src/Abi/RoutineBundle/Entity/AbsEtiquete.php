<?php
namespace Abi\RoutineBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AbsEtiquete
 *
 * @ORM\Table(name="abs_etiquete")
 * @ORM\Entity
 */
class AbsEtiquete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="etiq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $etiqId;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_title", type="string", length=255, nullable=false)
     */
    private $etiqTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_description", type="string", length=255, nullable=false)
     */
    private $etiqDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_motcles", type="string", length=255, nullable=false)
     */
    private $etiqMotcles;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_url", type="string", length=255, nullable=false)
     */
    private $etiqUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="etiq_texte", type="text", nullable=false)
     */
    private $etiqTexte;

    /**
     * @var integer
     *
     * @ORM\Column(name="etiq_etat", type="integer", nullable=false)
     */
    private $etiqEtat;



    /**
     * Get etiqId
     *
     * @return integer 
     */
    public function getEtiqId()
    {
        return $this->etiqId;
    }

    /**
     * Set etiqTitle
     *
     * @param string $etiqTitle
     * @return AbsEtiquete
     */
    public function setEtiqTitle($etiqTitle)
    {
        $this->etiqTitle = $etiqTitle;

        return $this;
    }

    /**
     * Get etiqTitle
     *
     * @return string 
     */
    public function getEtiqTitle()
    {
        return $this->etiqTitle;
    }

    /**
     * Set etiqDescription
     *
     * @param string $etiqDescription
     * @return AbsEtiquete
     */
    public function setEtiqDescription($etiqDescription)
    {
        $this->etiqDescription = $etiqDescription;

        return $this;
    }

    /**
     * Get etiqDescription
     *
     * @return string 
     */
    public function getEtiqDescription()
    {
        return $this->etiqDescription;
    }

    /**
     * Set etiqMotcles
     *
     * @param string $etiqMotcles
     * @return AbsEtiquete
     */
    public function setEtiqMotcles($etiqMotcles)
    {
        $this->etiqMotcles = $etiqMotcles;

        return $this;
    }

    /**
     * Get etiqMotcles
     *
     * @return string 
     */
    public function getEtiqMotcles()
    {
        return $this->etiqMotcles;
    }

    /**
     * Set etiqUrl
     *
     * @param string $etiqUrl
     * @return AbsEtiquete
     */
    public function setEtiqUrl($etiqUrl)
    {
        $this->etiqUrl = $etiqUrl;

        return $this;
    }

    /**
     * Get etiqUrl
     *
     * @return string 
     */
    public function getEtiqUrl()
    {
        return $this->etiqUrl;
    }

    /**
     * Set etiqTexte
     *
     * @param string $etiqTexte
     * @return AbsEtiquete
     */
    public function setEtiqTexte($etiqTexte)
    {
        $this->etiqTexte = $etiqTexte;

        return $this;
    }

    /**
     * Get etiqTexte
     *
     * @return string 
     */
    public function getEtiqTexte()
    {
        return $this->etiqTexte;
    }

    /**
     * Set etiqEtat
     *
     * @param integer $etiqEtat
     * @return AbsEtiquete
     */
    public function setEtiqEtat($etiqEtat)
    {
        $this->etiqEtat = $etiqEtat;

        return $this;
    }

    /**
     * Get etiqEtat
     *
     * @return integer 
     */
    public function getEtiqEtat()
    {
        return $this->etiqEtat;
    }
}
