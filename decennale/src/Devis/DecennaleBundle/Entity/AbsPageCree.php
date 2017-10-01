<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageCree
 *
 * @ORM\Table(name="abs_page_cree")
 * @ORM\Entity
 */
class AbsPageCree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pagecree_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagecreeId;

    /**
     * @var string
     *
     * @ORM\Column(name="pagecree_titre", type="string", length=200, nullable=false)
     */
    private $pagecreeTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pagecree_type", type="string", length=100, nullable=false)
     */
    private $pagecreeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagecree_etat", type="integer", nullable=false)
     */
    private $pagecreeEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pagecree_date", type="date", nullable=false)
     */
    private $pagecreeDate;


}
