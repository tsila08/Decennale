<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsTarif
 *
 * @ORM\Table(name="abs_tarif")
 * @ORM\Entity
 */
class AbsTarif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tarifId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_min", type="integer", nullable=false)
     */
    private $tarifMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_max", type="integer", nullable=false)
     */
    private $tarifMax;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifPrix;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_etat", type="integer", nullable=false)
     */
    private $tarifEtat;


}
