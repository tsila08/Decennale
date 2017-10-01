<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisRisques
 *
 * @ORM\Table(name="devis_risques")
 * @ORM\Entity
 */
class DevisRisques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dv_rq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dvRqId;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_rq_refclient", type="string", length=35, nullable=false)
     */
    private $dvRqRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_rq_refdevis", type="string", length=30, nullable=false)
     */
    private $dvRqRefdevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="dv_rq_refrisque", type="integer", nullable=false)
     */
    private $dvRqRefrisque;

    /**
     * @var string
     *
     * @ORM\Column(name="dv_rq_titre", type="string", length=200, nullable=false)
     */
    private $dvRqTitre;

    /**
     * @var integer
     *
     * @ORM\Column(name="dv_rq_etat", type="integer", nullable=false)
     */
    private $dvRqEtat;


}
