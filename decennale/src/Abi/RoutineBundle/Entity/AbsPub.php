<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPub
 *
 * @ORM\Table(name="abs_pub")
 * @ORM\Entity
 */
class AbsPub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pub_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pubId;

    /**
     * @var string
     *
     * @ORM\Column(name="pub_phrase", type="string", length=150, nullable=false)
     */
    private $pubPhrase;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub_etat", type="integer", nullable=false)
     */
    private $pubEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pub_date", type="date", nullable=false)
     */
    private $pubDate;



    /**
     * Get pubId
     *
     * @return integer 
     */
    public function getPubId()
    {
        return $this->pubId;
    }

    /**
     * Set pubPhrase
     *
     * @param string $pubPhrase
     * @return AbsPub
     */
    public function setPubPhrase($pubPhrase)
    {
        $this->pubPhrase = $pubPhrase;

        return $this;
    }

    /**
     * Get pubPhrase
     *
     * @return string 
     */
    public function getPubPhrase()
    {
        return $this->pubPhrase;
    }

    /**
     * Set pubEtat
     *
     * @param integer $pubEtat
     * @return AbsPub
     */
    public function setPubEtat($pubEtat)
    {
        $this->pubEtat = $pubEtat;

        return $this;
    }

    /**
     * Get pubEtat
     *
     * @return integer 
     */
    public function getPubEtat()
    {
        return $this->pubEtat;
    }

    /**
     * Set pubDate
     *
     * @param \DateTime $pubDate
     * @return AbsPub
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    /**
     * Get pubDate
     *
     * @return \DateTime 
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }
}
