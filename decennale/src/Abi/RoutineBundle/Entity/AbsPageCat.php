<?php

namespace Abi\RoutineBundle\Entity;

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



    /**
     * Get catId
     *
     * @return integer 
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * Set catRefcat
     *
     * @param integer $catRefcat
     * @return AbsPageCat
     */
    public function setCatRefcat($catRefcat)
    {
        $this->catRefcat = $catRefcat;

        return $this;
    }

    /**
     * Get catRefcat
     *
     * @return integer 
     */
    public function getCatRefcat()
    {
        return $this->catRefcat;
    }

    /**
     * Set catRefart
     *
     * @param integer $catRefart
     * @return AbsPageCat
     */
    public function setCatRefart($catRefart)
    {
        $this->catRefart = $catRefart;

        return $this;
    }

    /**
     * Get catRefart
     *
     * @return integer 
     */
    public function getCatRefart()
    {
        return $this->catRefart;
    }
}
