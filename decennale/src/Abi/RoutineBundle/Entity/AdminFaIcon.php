<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminFaIcon
 *
 * @ORM\Table(name="admin_fa_icon")
 * @ORM\Entity
 */
class AdminFaIcon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fa_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faId;

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ref", type="string", length=60, nullable=false)
     */
    private $faRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="fa_etat", type="integer", nullable=false)
     */
    private $faEtat;



    /**
     * Get faId
     *
     * @return integer 
     */
    public function getFaId()
    {
        return $this->faId;
    }

    /**
     * Set faRef
     *
     * @param string $faRef
     * @return AdminFaIcon
     */
    public function setFaRef($faRef)
    {
        $this->faRef = $faRef;

        return $this;
    }

    /**
     * Get faRef
     *
     * @return string 
     */
    public function getFaRef()
    {
        return $this->faRef;
    }

    /**
     * Set faEtat
     *
     * @param integer $faEtat
     * @return AdminFaIcon
     */
    public function setFaEtat($faEtat)
    {
        $this->faEtat = $faEtat;

        return $this;
    }

    /**
     * Get faEtat
     *
     * @return integer 
     */
    public function getFaEtat()
    {
        return $this->faEtat;
    }
}
