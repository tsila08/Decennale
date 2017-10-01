<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPub
 *
 * @ORM\Table(name="abs_pub")
 * @ORM\Entity
 */
class AbsPub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pub_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pubId;

    /**
     * @var string
     *
     * @ORM\Column(name="pub_phrase", type="string", length=150, nullable=false)
     */
    private $pubPhrase;

    /**
     * @var integer
     *
     * @ORM\Column(name="pub_etat", type="integer", nullable=false)
     */
    private $pubEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pub_date", type="date", nullable=false)
     */
    private $pubDate;


}
