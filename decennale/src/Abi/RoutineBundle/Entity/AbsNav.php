<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsNav
 *
 * @ORM\Table(name="abs_nav")
 * @ORM\Entity
 */
class AbsNav
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nav_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $navId;

    /**
     * @var string
     *
     * @ORM\Column(name="nav_titre", type="string", length=200, nullable=false)
     */
    private $navTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="nav_url", type="string", length=250, nullable=false)
     */
    private $navUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="nav_ordre", type="integer", nullable=false)
     */
    private $navOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="nav_type", type="string", length=50, nullable=false)
     */
    private $navType;

    /**
     * @var integer
     *
     * @ORM\Column(name="nav_etat", type="integer", nullable=false)
     */
    private $navEtat;



    /**
     * Get navId
     *
     * @return integer 
     */
    public function getNavId()
    {
        return $this->navId;
    }

    /**
     * Set navTitre
     *
     * @param string $navTitre
     * @return AbsNav
     */
    public function setNavTitre($navTitre)
    {
        $this->navTitre = $navTitre;

        return $this;
    }

    /**
     * Get navTitre
     *
     * @return string 
     */
    public function getNavTitre()
    {
        return $this->navTitre;
    }

    /**
     * Set navUrl
     *
     * @param string $navUrl
     * @return AbsNav
     */
    public function setNavUrl($navUrl)
    {
        $this->navUrl = $navUrl;

        return $this;
    }

    /**
     * Get navUrl
     *
     * @return string 
     */
    public function getNavUrl()
    {
        return $this->navUrl;
    }

    /**
     * Set navOrdre
     *
     * @param integer $navOrdre
     * @return AbsNav
     */
    public function setNavOrdre($navOrdre)
    {
        $this->navOrdre = $navOrdre;

        return $this;
    }

    /**
     * Get navOrdre
     *
     * @return integer 
     */
    public function getNavOrdre()
    {
        return $this->navOrdre;
    }

    /**
     * Set navType
     *
     * @param string $navType
     * @return AbsNav
     */
    public function setNavType($navType)
    {
        $this->navType = $navType;

        return $this;
    }

    /**
     * Get navType
     *
     * @return string 
     */
    public function getNavType()
    {
        return $this->navType;
    }

    /**
     * Set navEtat
     *
     * @param integer $navEtat
     * @return AbsNav
     */
    public function setNavEtat($navEtat)
    {
        $this->navEtat = $navEtat;

        return $this;
    }

    /**
     * Get navEtat
     *
     * @return integer 
     */
    public function getNavEtat()
    {
        return $this->navEtat;
    }
}
