<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminFaIcon
 *
 * @ORM\Table(name="admin_fa_icon")
 * @ORM\Entity
 */
class AdminFaIcon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fa_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faId;

    /**
     * @var string
     *
     * @ORM\Column(name="fa_ref", type="string", length=60, nullable=false)
     */
    private $faRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="fa_etat", type="integer", nullable=false)
     */
    private $faEtat;


}
