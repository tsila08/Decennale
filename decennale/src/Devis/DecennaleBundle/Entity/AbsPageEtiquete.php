<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageEtiquete
 *
 * @ORM\Table(name="abs_page_etiquete")
 * @ORM\Entity
 */
class AbsPageEtiquete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="petq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $petqId;

    /**
     * @var integer
     *
     * @ORM\Column(name="petq_refetequette", type="integer", nullable=false)
     */
    private $petqRefetequette;

    /**
     * @var integer
     *
     * @ORM\Column(name="petq_refarticle", type="integer", nullable=false)
     */
    private $petqRefarticle;


}
