<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wdget
 *
 * @ORM\Table(name="wdget")
 * @ORM\Entity
 */
class Wdget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wd_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wdId;

    /**
     * @var string
     *
     * @ORM\Column(name="wd_titre", type="string", length=200, nullable=false)
     */
    private $wdTitre;

    /**
     * @var integer
     *
     * @ORM\Column(name="wd_idpage", type="integer", nullable=false)
     */
    private $wdIdpage;

    /**
     * @var string
     *
     * @ORM\Column(name="wd_url", type="string", length=100, nullable=false)
     */
    private $wdUrl;


}
