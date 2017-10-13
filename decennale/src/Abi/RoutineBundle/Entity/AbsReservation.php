<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsReservation
 *
 * @ORM\Table(name="abs_reservation")
 * @ORM\Entity
 */
class AbsReservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rev_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $revId;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_refclient", type="string", length=20, nullable=false)
     */
    private $revRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_refresrv", type="string", length=20, nullable=false)
     */
    private $revRefresrv;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_villedepart", type="string", length=255, nullable=false)
     */
    private $revVilledepart;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_villeariv", type="string", length=255, nullable=false)
     */
    private $revVilleariv;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_dateresev", type="string", length=50, nullable=false)
     */
    private $revDateresev;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_heureresev", type="string", length=50, nullable=false)
     */
    private $revHeureresev;

    /**
     * @var integer
     *
     * @ORM\Column(name="rev_nbperssone", type="integer", nullable=false)
     */
    private $revNbperssone;

    /**
     * @var integer
     *
     * @ORM\Column(name="rev_nbbagage", type="integer", nullable=false)
     */
    private $revNbbagage;

    /**
     * @var float
     *
     * @ORM\Column(name="rev_distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $revDistance;

    /**
     * @var float
     *
     * @ORM\Column(name="rev_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $revPrix;

    /**
     * @var string
     *
     * @ORM\Column(name="rev_message", type="string", length=400, nullable=false)
     */
    private $revMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rev_date", type="date", nullable=false)
     */
    private $revDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="rev_etat", type="integer", nullable=false)
     */
    private $revEtat;



    /**
     * Get revId
     *
     * @return integer 
     */
    public function getRevId()
    {
        return $this->revId;
    }

    /**
     * Set revRefclient
     *
     * @param string $revRefclient
     * @return AbsReservation
     */
    public function setRevRefclient($revRefclient)
    {
        $this->revRefclient = $revRefclient;

        return $this;
    }

    /**
     * Get revRefclient
     *
     * @return string 
     */
    public function getRevRefclient()
    {
        return $this->revRefclient;
    }

    /**
     * Set revRefresrv
     *
     * @param string $revRefresrv
     * @return AbsReservation
     */
    public function setRevRefresrv($revRefresrv)
    {
        $this->revRefresrv = $revRefresrv;

        return $this;
    }

    /**
     * Get revRefresrv
     *
     * @return string 
     */
    public function getRevRefresrv()
    {
        return $this->revRefresrv;
    }

    /**
     * Set revVilledepart
     *
     * @param string $revVilledepart
     * @return AbsReservation
     */
    public function setRevVilledepart($revVilledepart)
    {
        $this->revVilledepart = $revVilledepart;

        return $this;
    }

    /**
     * Get revVilledepart
     *
     * @return string 
     */
    public function getRevVilledepart()
    {
        return $this->revVilledepart;
    }

    /**
     * Set revVilleariv
     *
     * @param string $revVilleariv
     * @return AbsReservation
     */
    public function setRevVilleariv($revVilleariv)
    {
        $this->revVilleariv = $revVilleariv;

        return $this;
    }

    /**
     * Get revVilleariv
     *
     * @return string 
     */
    public function getRevVilleariv()
    {
        return $this->revVilleariv;
    }

    /**
     * Set revDateresev
     *
     * @param string $revDateresev
     * @return AbsReservation
     */
    public function setRevDateresev($revDateresev)
    {
        $this->revDateresev = $revDateresev;

        return $this;
    }

    /**
     * Get revDateresev
     *
     * @return string 
     */
    public function getRevDateresev()
    {
        return $this->revDateresev;
    }

    /**
     * Set revHeureresev
     *
     * @param string $revHeureresev
     * @return AbsReservation
     */
    public function setRevHeureresev($revHeureresev)
    {
        $this->revHeureresev = $revHeureresev;

        return $this;
    }

    /**
     * Get revHeureresev
     *
     * @return string 
     */
    public function getRevHeureresev()
    {
        return $this->revHeureresev;
    }

    /**
     * Set revNbperssone
     *
     * @param integer $revNbperssone
     * @return AbsReservation
     */
    public function setRevNbperssone($revNbperssone)
    {
        $this->revNbperssone = $revNbperssone;

        return $this;
    }

    /**
     * Get revNbperssone
     *
     * @return integer 
     */
    public function getRevNbperssone()
    {
        return $this->revNbperssone;
    }

    /**
     * Set revNbbagage
     *
     * @param integer $revNbbagage
     * @return AbsReservation
     */
    public function setRevNbbagage($revNbbagage)
    {
        $this->revNbbagage = $revNbbagage;

        return $this;
    }

    /**
     * Get revNbbagage
     *
     * @return integer 
     */
    public function getRevNbbagage()
    {
        return $this->revNbbagage;
    }

    /**
     * Set revDistance
     *
     * @param float $revDistance
     * @return AbsReservation
     */
    public function setRevDistance($revDistance)
    {
        $this->revDistance = $revDistance;

        return $this;
    }

    /**
     * Get revDistance
     *
     * @return float 
     */
    public function getRevDistance()
    {
        return $this->revDistance;
    }

    /**
     * Set revPrix
     *
     * @param float $revPrix
     * @return AbsReservation
     */
    public function setRevPrix($revPrix)
    {
        $this->revPrix = $revPrix;

        return $this;
    }

    /**
     * Get revPrix
     *
     * @return float 
     */
    public function getRevPrix()
    {
        return $this->revPrix;
    }

    /**
     * Set revMessage
     *
     * @param string $revMessage
     * @return AbsReservation
     */
    public function setRevMessage($revMessage)
    {
        $this->revMessage = $revMessage;

        return $this;
    }

    /**
     * Get revMessage
     *
     * @return string 
     */
    public function getRevMessage()
    {
        return $this->revMessage;
    }

    /**
     * Set revDate
     *
     * @param \DateTime $revDate
     * @return AbsReservation
     */
    public function setRevDate($revDate)
    {
        $this->revDate = $revDate;

        return $this;
    }

    /**
     * Get revDate
     *
     * @return \DateTime 
     */
    public function getRevDate()
    {
        return $this->revDate;
    }

    /**
     * Set revEtat
     *
     * @param integer $revEtat
     * @return AbsReservation
     */
    public function setRevEtat($revEtat)
    {
        $this->revEtat = $revEtat;

        return $this;
    }

    /**
     * Get revEtat
     *
     * @return integer 
     */
    public function getRevEtat()
    {
        return $this->revEtat;
    }
}
