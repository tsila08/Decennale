<?php

namespace Infojet\DevisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelationDevisAutreRiqsue
 *
 * @ORM\Table(name="relation_devis_autre_riqsue")
 * @ORM\Entity(repositoryClass="Infojet\DevisBundle\Repository\RelationDevisAutreRiqsueRepository")
 */
class RelationDevisAutreRiqsue
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
     * @ORM\Column(name="Prix", type="string", length=255, nullable=true)
     */
    private $prix;


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
     * Set prix
     *
     * @param string $prix
     * @return RelationDevisAutreRiqsue
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
