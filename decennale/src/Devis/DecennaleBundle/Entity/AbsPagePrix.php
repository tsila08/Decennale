<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPagePrix
 *
 * @ORM\Table(name="abs_page_prix")
 * @ORM\Entity
 */
class AbsPagePrix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prix_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prixId;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_refarticle", type="integer", nullable=false)
     */
    private $prixRefarticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixPrix;


}
