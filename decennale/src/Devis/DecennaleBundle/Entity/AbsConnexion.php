<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsConnexion
 *
 * @ORM\Table(name="abs_connexion")
 * @ORM\Entity
 */
class AbsConnexion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="conect_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conectId;

    /**
     * @var string
     *
     * @ORM\Column(name="conect_ref", type="string", length=30, nullable=false)
     */
    private $conectRef;

    /**
     * @var string
     *
     * @ORM\Column(name="conect_pseudo", type="string", length=100, nullable=false)
     */
    private $conectPseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="conect_email", type="string", length=200, nullable=false)
     */
    private $conectEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="conect_mdp", type="string", length=200, nullable=false)
     */
    private $conectMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="conect_ip", type="string", length=200, nullable=false)
     */
    private $conectIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="conect_etat", type="integer", nullable=false)
     */
    private $conectEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="conect_date", type="date", nullable=false)
     */
    private $conectDate;


}
