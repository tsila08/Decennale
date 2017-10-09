<?php

namespace Infojet\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Risque
 *
 * @ORM\Table(name="risque")
 * @ORM\Entity(repositoryClass="Infojet\DevisBundle\Repository\RisqueRepository")
 */
class Risque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

     /**
     * @var string
     *
     * @ORM\Column(name="libelle_input", type="string", length=255)
     */
    private $libelleInput;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="estDisponible", type="boolean")
     */
    private $estDisponible;

    /**
    * @ORM\ManyToOne(targetEntity="Infojet\DevisBundle\Entity\GroupeRisque", inversedBy="risques")
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupe;

    /***************************
    *    Les fonctions        *
    **************************/

    //Generer un nom à utiliser dans input (dans la page selection des risques)
    public function getInputName()
    {
        return $this->getLibelleInput().$this->getId() ;
    }

    /***********************
    *  GETER et SETER     *
    **********************/
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
     * Set libelle
     *
     * @param string $libelle
     * @return Risque
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Risque
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set estDisponible
     *
     * @param boolean $estDisponible
     * @return Risque
     */
    public function setEstDisponible($estDisponible)
    {
        $this->estDisponible = $estDisponible;

        return $this;
    }

    /**
     * Get estDisponible
     *
     * @return boolean 
     */
    public function getEstDisponible()
    {
        return $this->estDisponible;
    }

    /**
     * Set libelleInput
     *
     * @param string $libelleInput
     * @return Risque
     */
    public function setLibelleInput($libelleInput)
    {
        $this->libelleInput = $libelleInput;

        return $this;
    }

    /**
     * Get libelleInput
     *
     * @return string 
     */
    public function getLibelleInput()
    {
        return $this->libelleInput;
    }

    /**
     * Set groupe
     *
     * @param \Infojet\DevisBundle\Entity\GroupeRisque $groupe
     * @return Risque
     */
    public function setGroupe(\Infojet\DevisBundle\Entity\GroupeRisque $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \Infojet\DevisBundle\Entity\GroupeRisque 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }
}
