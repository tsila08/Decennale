<?php

namespace Devis\DecennaleBundle\Entity;

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


}
