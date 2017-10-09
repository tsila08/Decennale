<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsConnexionConfirm
 *
 * @ORM\Table(name="abs_connexion_confirm")
 * @ORM\Entity
 */
class AbsConnexionConfirm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="confirm_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $confirmId;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_pseudo", type="string", length=255, nullable=false)
     */
    private $confirmPseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_ref", type="string", length=200, nullable=false)
     */
    private $confirmRef;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_chaine", type="string", length=255, nullable=false)
     */
    private $confirmChaine;


}
