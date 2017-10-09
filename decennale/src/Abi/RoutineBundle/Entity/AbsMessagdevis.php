<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsMessagdevis
 *
 * @ORM\Table(name="abs_messagdevis")
 * @ORM\Entity
 */
class AbsMessagdevis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="devis_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $devisId;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_refclient", type="string", length=20, nullable=false)
     */
    private $devisRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_refdevis", type="string", length=25, nullable=false)
     */
    private $devisRefdevis;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_typecontrat", type="string", length=150, nullable=false)
     */
    private $devisTypecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="devis_echeance", type="string", length=50, nullable=false)
     */
    private $devisEcheance;

    /**
     * @var integer
     *
     * @ORM\Column(name="devis_etat", type="integer", nullable=false)
     */
    private $devisEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="devis_date", type="date", nullable=false)
     */
    private $devisDate;


}
