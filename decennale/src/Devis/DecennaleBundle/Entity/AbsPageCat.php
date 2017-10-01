<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageCat
 *
 * @ORM\Table(name="abs_page_cat")
 * @ORM\Entity
 */
class AbsPageCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_refcat", type="integer", nullable=false)
     */
    private $catRefcat;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_refart", type="integer", nullable=false)
     */
    private $catRefart;


}
