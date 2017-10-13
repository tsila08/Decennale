<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageSidebar
 *
 * @ORM\Table(name="abs_page_sidebar")
 * @ORM\Entity
 */
class AbsPageSidebar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sidebar_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sidebarId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sidebar_ref", type="integer", nullable=false)
     */
    private $sidebarRef;

    /**
     * @var string
     *
     * @ORM\Column(name="sidebar_titre", type="string", length=200, nullable=false)
     */
    private $sidebarTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="sidebar_description", type="text", nullable=false)
     */
    private $sidebarDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="sidebar_etat", type="integer", nullable=false)
     */
    private $sidebarEtat;



    /**
     * Get sidebarId
     *
     * @return integer 
     */
    public function getSidebarId()
    {
        return $this->sidebarId;
    }

    /**
     * Set sidebarRef
     *
     * @param integer $sidebarRef
     * @return AbsPageSidebar
     */
    public function setSidebarRef($sidebarRef)
    {
        $this->sidebarRef = $sidebarRef;

        return $this;
    }

    /**
     * Get sidebarRef
     *
     * @return integer 
     */
    public function getSidebarRef()
    {
        return $this->sidebarRef;
    }

    /**
     * Set sidebarTitre
     *
     * @param string $sidebarTitre
     * @return AbsPageSidebar
     */
    public function setSidebarTitre($sidebarTitre)
    {
        $this->sidebarTitre = $sidebarTitre;

        return $this;
    }

    /**
     * Get sidebarTitre
     *
     * @return string 
     */
    public function getSidebarTitre()
    {
        return $this->sidebarTitre;
    }

    /**
     * Set sidebarDescription
     *
     * @param string $sidebarDescription
     * @return AbsPageSidebar
     */
    public function setSidebarDescription($sidebarDescription)
    {
        $this->sidebarDescription = $sidebarDescription;

        return $this;
    }

    /**
     * Get sidebarDescription
     *
     * @return string 
     */
    public function getSidebarDescription()
    {
        return $this->sidebarDescription;
    }

    /**
     * Set sidebarEtat
     *
     * @param integer $sidebarEtat
     * @return AbsPageSidebar
     */
    public function setSidebarEtat($sidebarEtat)
    {
        $this->sidebarEtat = $sidebarEtat;

        return $this;
    }

    /**
     * Get sidebarEtat
     *
     * @return integer 
     */
    public function getSidebarEtat()
    {
        return $this->sidebarEtat;
    }
}
