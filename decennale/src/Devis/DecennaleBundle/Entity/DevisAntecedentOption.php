<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisAntecedentOption
 *
 * @ORM\Table(name="devis_antecedent_option")
 * @ORM\Entity
 */
class DevisAntecedentOption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ant_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $antId;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_refdevs", type="string", length=35, nullable=false)
     */
    private $antRefdevs;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_refclient", type="string", length=35, nullable=false)
     */
    private $antRefclient;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_date_effet", type="string", length=20, nullable=false)
     */
    private $antDateEffet;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_echeancier", type="string", length=20, nullable=false)
     */
    private $antEcheancier;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_dejassure", type="integer", nullable=false)
     */
    private $antDejassure;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_soustraitance", type="integer", nullable=false)
     */
    private $antSoustraitance;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_reprise", type="integer", nullable=false)
     */
    private $antReprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_redressement", type="integer", nullable=false)
     */
    private $antRedressement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ant_daterecue", type="date", nullable=false)
     */
    private $antDaterecue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_etat", type="integer", nullable=false)
     */
    private $antEtat;


}
