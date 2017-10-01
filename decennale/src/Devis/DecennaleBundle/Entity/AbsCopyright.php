<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsCopyright
 *
 * @ORM\Table(name="abs_copyright")
 * @ORM\Entity
 */
class AbsCopyright
{
    /**
     * @var integer
     *
     * @ORM\Column(name="copyright_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $copyrightId;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright_", type="string", length=255, nullable=false)
     */
    private $copyright;


}
