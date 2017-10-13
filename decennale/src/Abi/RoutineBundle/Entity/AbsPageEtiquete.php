<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageEtiquete
 *
 * @ORM\Table(name="abs_page_etiquete")
 * @ORM\Entity
 */
class AbsPageEtiquete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="petq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $petqId;

    /**
     * @var integer
     *
     * @ORM\Column(name="petq_refetequette", type="integer", nullable=false)
     */
    private $petqRefetequette;

    /**
     * @var integer
     *
     * @ORM\Column(name="petq_refarticle", type="integer", nullable=false)
     */
    private $petqRefarticle;



    /**
     * Get petqId
     *
     * @return integer 
     */
    public function getPetqId()
    {
        return $this->petqId;
    }

    /**
     * Set petqRefetequette
     *
     * @param integer $petqRefetequette
     * @return AbsPageEtiquete
     */
    public function setPetqRefetequette($petqRefetequette)
    {
        $this->petqRefetequette = $petqRefetequette;

        return $this;
    }

    /**
     * Get petqRefetequette
     *
     * @return integer 
     */
    public function getPetqRefetequette()
    {
        return $this->petqRefetequette;
    }

    /**
     * Set petqRefarticle
     *
     * @param integer $petqRefarticle
     * @return AbsPageEtiquete
     */
    public function setPetqRefarticle($petqRefarticle)
    {
        $this->petqRefarticle = $petqRefarticle;

        return $this;
    }

    /**
     * Get petqRefarticle
     *
     * @return integer 
     */
    public function getPetqRefarticle()
    {
        return $this->petqRefarticle;
    }
}
