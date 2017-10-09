<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNosReferancesImg
 *
 * @ORM\Table(name="mdl_nos_referances_img")
 * @ORM\Entity
 */
class MdlNosReferancesImg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nrefrimg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrefrimgId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefrimg_ref", type="integer", nullable=false)
     */
    private $nrefrimgRef;

    /**
     * @var string
     *
     * @ORM\Column(name="nrefrimg_img", type="string", length=150, nullable=false)
     */
    private $nrefrimgImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="nrefrimg_etat", type="integer", nullable=false)
     */
    private $nrefrimgEtat;


}
