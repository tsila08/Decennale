<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisRecue
 *
 * @ORM\Table(name="devis_recue")
 * @ORM\Entity
 */
class DevisRecue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dvr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dvrId;

    /**
     * @var string
     *
     * @ORM\Column(name="dvr_refclient", type="string", length=30, nullable=false)
     */
    private $dvrRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="dvr_refdevis", type="string", length=30, nullable=false)
     */
    private $dvrRefdevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="dvr_etat", type="integer", nullable=false)
     */
    private $dvrEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dvr_date", type="date", nullable=false)
     */
    private $dvrDate;


}
