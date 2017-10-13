<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPagePrix
 *
 * @ORM\Table(name="abs_page_prix")
 * @ORM\Entity
 */
class AbsPagePrix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prix_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prixId;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_refarticle", type="integer", nullable=false)
     */
    private $prixRefarticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixPrix;



    /**
     * Get prixId
     *
     * @return integer 
     */
    public function getPrixId()
    {
        return $this->prixId;
    }

    /**
     * Set prixRefarticle
     *
     * @param integer $prixRefarticle
     * @return AbsPagePrix
     */
    public function setPrixRefarticle($prixRefarticle)
    {
        $this->prixRefarticle = $prixRefarticle;

        return $this;
    }

    /**
     * Get prixRefarticle
     *
     * @return integer 
     */
    public function getPrixRefarticle()
    {
        return $this->prixRefarticle;
    }

    /**
     * Set prixPrix
     *
     * @param float $prixPrix
     * @return AbsPagePrix
     */
    public function setPrixPrix($prixPrix)
    {
        $this->prixPrix = $prixPrix;

        return $this;
    }

    /**
     * Get prixPrix
     *
     * @return float 
     */
    public function getPrixPrix()
    {
        return $this->prixPrix;
    }
}
