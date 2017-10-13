<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNewsImg
 *
 * @ORM\Table(name="mdl_news_img", uniqueConstraints={@ORM\UniqueConstraint(name="nig_id", columns={"nig_id"})})
 * @ORM\Entity
 */
class MdlNewsImg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nig_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nigId;

    /**
     * @var string
     *
     * @ORM\Column(name="nig_img", type="string", length=200, nullable=false)
     */
    private $nigImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="nig_etat", type="integer", nullable=false)
     */
    private $nigEtat;



    /**
     * Get nigId
     *
     * @return integer 
     */
    public function getNigId()
    {
        return $this->nigId;
    }

    /**
     * Set nigImg
     *
     * @param string $nigImg
     * @return MdlNewsImg
     */
    public function setNigImg($nigImg)
    {
        $this->nigImg = $nigImg;

        return $this;
    }

    /**
     * Get nigImg
     *
     * @return string 
     */
    public function getNigImg()
    {
        return $this->nigImg;
    }

    /**
     * Set nigEtat
     *
     * @param integer $nigEtat
     * @return MdlNewsImg
     */
    public function setNigEtat($nigEtat)
    {
        $this->nigEtat = $nigEtat;

        return $this;
    }

    /**
     * Get nigEtat
     *
     * @return integer 
     */
    public function getNigEtat()
    {
        return $this->nigEtat;
    }
}
