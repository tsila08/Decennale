<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageSiteLogo
 *
 * @ORM\Table(name="abs_page_site_logo")
 * @ORM\Entity
 */
class AbsPageSiteLogo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pagelogo_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagelogoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagelogo_ref", type="integer", nullable=false)
     */
    private $pagelogoRef;

    /**
     * @var string
     *
     * @ORM\Column(name="pagelogo_img", type="string", length=100, nullable=false)
     */
    private $pagelogoImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagelogo_etat", type="integer", nullable=false)
     */
    private $pagelogoEtat;



    /**
     * Get pagelogoId
     *
     * @return integer 
     */
    public function getPagelogoId()
    {
        return $this->pagelogoId;
    }

    /**
     * Set pagelogoRef
     *
     * @param integer $pagelogoRef
     * @return AbsPageSiteLogo
     */
    public function setPagelogoRef($pagelogoRef)
    {
        $this->pagelogoRef = $pagelogoRef;

        return $this;
    }

    /**
     * Get pagelogoRef
     *
     * @return integer 
     */
    public function getPagelogoRef()
    {
        return $this->pagelogoRef;
    }

    /**
     * Set pagelogoImg
     *
     * @param string $pagelogoImg
     * @return AbsPageSiteLogo
     */
    public function setPagelogoImg($pagelogoImg)
    {
        $this->pagelogoImg = $pagelogoImg;

        return $this;
    }

    /**
     * Get pagelogoImg
     *
     * @return string 
     */
    public function getPagelogoImg()
    {
        return $this->pagelogoImg;
    }

    /**
     * Set pagelogoEtat
     *
     * @param integer $pagelogoEtat
     * @return AbsPageSiteLogo
     */
    public function setPagelogoEtat($pagelogoEtat)
    {
        $this->pagelogoEtat = $pagelogoEtat;

        return $this;
    }

    /**
     * Get pagelogoEtat
     *
     * @return integer 
     */
    public function getPagelogoEtat()
    {
        return $this->pagelogoEtat;
    }
}
