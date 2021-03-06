<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupeRisque
 *
 * @ORM\Table(name="groupe_risque")
 * @ORM\Entity(repositoryClass="Infojet\DevisBundle\Repository\GroupeRisqueRepository")
 */
class GroupeRisque
{
    /**
    * @ORM\OneToMany(targetEntity="Infojet\DevisBundle\Entity\Risque",mappedBy="groupe")
    */
    private $risques;
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
     * @return GroupeRisque
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
     * Constructor
     */
    public function __construct()
    {
        $this->risques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add risques
     *
     * @param \Infojet\DevisBundle\Entity\Risque $risques
     * @return GroupeRisque
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
}
