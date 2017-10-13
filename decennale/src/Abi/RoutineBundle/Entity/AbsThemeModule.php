<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsThemeModule
 *
 * @ORM\Table(name="abs_theme_module")
 * @ORM\Entity
 */
class AbsThemeModule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="th_module_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $thModuleId;

    /**
     * @var string
     *
     * @ORM\Column(name="th_module_titre", type="string", length=200, nullable=false)
     */
    private $thModuleTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="th_module_info", type="text", nullable=false)
     */
    private $thModuleInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="th_module_ordre", type="integer", nullable=false)
     */
    private $thModuleOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="th_module_url", type="string", length=100, nullable=false)
     */
    private $thModuleUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="th_module_etat", type="integer", nullable=false)
     */
    private $thModuleEtat;



    /**
     * Get thModuleId
     *
     * @return integer 
     */
    public function getThModuleId()
    {
        return $this->thModuleId;
    }

    /**
     * Set thModuleTitre
     *
     * @param string $thModuleTitre
     * @return AbsThemeModule
     */
    public function setThModuleTitre($thModuleTitre)
    {
        $this->thModuleTitre = $thModuleTitre;

        return $this;
    }

    /**
     * Get thModuleTitre
     *
     * @return string 
     */
    public function getThModuleTitre()
    {
        return $this->thModuleTitre;
    }

    /**
     * Set thModuleInfo
     *
     * @param string $thModuleInfo
     * @return AbsThemeModule
     */
    public function setThModuleInfo($thModuleInfo)
    {
        $this->thModuleInfo = $thModuleInfo;

        return $this;
    }

    /**
     * Get thModuleInfo
     *
     * @return string 
     */
    public function getThModuleInfo()
    {
        return $this->thModuleInfo;
    }

    /**
     * Set thModuleOrdre
     *
     * @param integer $thModuleOrdre
     * @return AbsThemeModule
     */
    public function setThModuleOrdre($thModuleOrdre)
    {
        $this->thModuleOrdre = $thModuleOrdre;

        return $this;
    }

    /**
     * Get thModuleOrdre
     *
     * @return integer 
     */
    public function getThModuleOrdre()
    {
        return $this->thModuleOrdre;
    }

    /**
     * Set thModuleUrl
     *
     * @param string $thModuleUrl
     * @return AbsThemeModule
     */
    public function setThModuleUrl($thModuleUrl)
    {
        $this->thModuleUrl = $thModuleUrl;

        return $this;
    }

    /**
     * Get thModuleUrl
     *
     * @return string 
     */
    public function getThModuleUrl()
    {
        return $this->thModuleUrl;
    }

    /**
     * Set thModuleEtat
     *
     * @param integer $thModuleEtat
     * @return AbsThemeModule
     */
    public function setThModuleEtat($thModuleEtat)
    {
        $this->thModuleEtat = $thModuleEtat;

        return $this;
    }

    /**
     * Get thModuleEtat
     *
     * @return integer 
     */
    public function getThModuleEtat()
    {
        return $this->thModuleEtat;
    }
}
