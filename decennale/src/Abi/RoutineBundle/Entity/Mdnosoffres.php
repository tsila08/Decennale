<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mdnosoffres
 *
 * @ORM\Table(name="mdnosoffres")
 * @ORM\Entity
 */
class Mdnosoffres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="off_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offId;

    /**
     * @var integer
     *
     * @ORM\Column(name="off_refart", type="integer", nullable=false)
     */
    private $offRefart;

    /**
     * @var string
     *
     * @ORM\Column(name="off_description", type="string", length=255, nullable=false)
     */
    private $offDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="off_etat", type="integer", nullable=false)
     */
    private $offEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="off_date", type="date", nullable=false)
     */
    private $offDate;



    /**
     * Get offId
     *
     * @return integer 
     */
    public function getOffId()
    {
        return $this->offId;
    }

    /**
     * Set offRefart
     *
     * @param integer $offRefart
     * @return Mdnosoffres
     */
    public function setOffRefart($offRefart)
    {
        $this->offRefart = $offRefart;

        return $this;
    }

    /**
     * Get offRefart
     *
     * @return integer 
     */
    public function getOffRefart()
    {
        return $this->offRefart;
    }

    /**
     * Set offDescription
     *
     * @param string $offDescription
     * @return Mdnosoffres
     */
    public function setOffDescription($offDescription)
    {
        $this->offDescription = $offDescription;

        return $this;
    }

    /**
     * Get offDescription
     *
     * @return string 
     */
    public function getOffDescription()
    {
        return $this->offDescription;
    }

    /**
     * Set offEtat
     *
     * @param integer $offEtat
     * @return Mdnosoffres
     */
    public function setOffEtat($offEtat)
    {
        $this->offEtat = $offEtat;

        return $this;
    }

    /**
     * Get offEtat
     *
     * @return integer 
     */
    public function getOffEtat()
    {
        return $this->offEtat;
    }

    /**
     * Set offDate
     *
     * @param \DateTime $offDate
     * @return Mdnosoffres
     */
    public function setOffDate($offDate)
    {
        $this->offDate = $offDate;

        return $this;
    }

    /**
     * Get offDate
     *
     * @return \DateTime 
     */
    public function getOffDate()
    {
        return $this->offDate;
    }
}
