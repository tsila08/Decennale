<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WdDispatcher
 *
 * @ORM\Table(name="wd_dispatcher")
 * @ORM\Entity
 */
class WdDispatcher
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dis_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $disId;

    /**
     * @var string
     *
     * @ORM\Column(name="dis_type", type="string", length=50, nullable=false)
     */
    private $disType;

    /**
     * @var string
     *
     * @ORM\Column(name="dis_titre", type="string", length=100, nullable=false)
     */
    private $disTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="dis_discription", type="string", length=255, nullable=false)
     */
    private $disDiscription;

    /**
     * @var string
     *
     * @ORM\Column(name="dis_url", type="string", length=200, nullable=false)
     */
    private $disUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="dis_etat", type="integer", nullable=false)
     */
    private $disEtat;


}
