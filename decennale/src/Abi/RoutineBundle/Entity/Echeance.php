<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echeance
 *
 * @ORM\Table(name="echeance")
 * @ORM\Entity(repositoryClass="Infojet\DevisBundle\Repository\EcheanceRepository")
 */
class Echeance
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
     * @var bool
     *
     * @ORM\Column(name="estDisponible", type="boolean")
     */
    private $estDisponible;


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
     * @return Echeance
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
     * Set estDisponible
     *
     * @param boolean $estDisponible
     * @return Echeance
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
}
