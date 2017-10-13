<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosReferancesImg
 *
 * @ORM\Table(name="mdl_nos_referances_img")
 * @ORM\Entity
 */
class MdlNosReferancesImg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nrefrimg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrefrimgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefrimg_ref", type="integer", nullable=false)
     */
    private $nrefrimgRef;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefrimg_img", type="string", length=150, nullable=false)
     */
    private $nrefrimgImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefrimg_etat", type="integer", nullable=false)
     */
    private $nrefrimgEtat;



    /**
     * Get nrefrimgId
     *
     * @return integer 
     */
    public function getNrefrimgId()
    {
        return $this->nrefrimgId;
    }

    /**
     * Set nrefrimgRef
     *
     * @param integer $nrefrimgRef
     * @return MdlNosReferancesImg
     */
    public function setNrefrimgRef($nrefrimgRef)
    {
        $this->nrefrimgRef = $nrefrimgRef;

        return $this;
    }

    /**
     * Get nrefrimgRef
     *
     * @return integer 
     */
    public function getNrefrimgRef()
    {
        return $this->nrefrimgRef;
    }

    /**
     * Set nrefrimgImg
     *
     * @param string $nrefrimgImg
     * @return MdlNosReferancesImg
     */
    public function setNrefrimgImg($nrefrimgImg)
    {
        $this->nrefrimgImg = $nrefrimgImg;

        return $this;
    }

    /**
     * Get nrefrimgImg
     *
     * @return string 
     */
    public function getNrefrimgImg()
    {
        return $this->nrefrimgImg;
    }

    /**
     * Set nrefrimgEtat
     *
     * @param integer $nrefrimgEtat
     * @return MdlNosReferancesImg
     */
    public function setNrefrimgEtat($nrefrimgEtat)
    {
        $this->nrefrimgEtat = $nrefrimgEtat;

        return $this;
    }

    /**
     * Get nrefrimgEtat
     *
     * @return integer 
     */
    public function getNrefrimgEtat()
    {
        return $this->nrefrimgEtat;
    }
}
