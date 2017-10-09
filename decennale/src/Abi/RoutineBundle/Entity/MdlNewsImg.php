<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MdlNewsImg
 *
 * @ORM\Table(name="mdl_news_img", uniqueConstraints={@ORM\UniqueConstraint(name="nig_id", columns={"nig_id"})})
 * @ORM\Entity
 */
class MdlNewsImg
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nig_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nigId;

    /**
     * @var string
     *
     * @ORM\Column(name="nig_img", type="string", length=200, nullable=false)
     */
    private $nigImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="nig_etat", type="integer", nullable=false)
     */
    private $nigEtat;


}
