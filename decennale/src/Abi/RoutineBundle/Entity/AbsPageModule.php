<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageModule
 *
 * @ORM\Table(name="abs_page_module")
 * @ORM\Entity
 */
class AbsPageModule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_ref", type="integer", nullable=false)
     */
    private $moduleRef;

    /**
     * @var string
     *
     * @ORM\Column(name="module_page", type="string", length=50, nullable=false)
     */
    private $modulePage;

    /**
     * @var string
     *
     * @ORM\Column(name="module_titre", type="string", length=50, nullable=false)
     */
    private $moduleTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="module_url", type="string", length=100, nullable=false)
     */
    private $moduleUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_ordre", type="integer", nullable=false)
     */
    private $moduleOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_etat", type="integer", nullable=false)
     */
    private $moduleEtat;



    /**
     * Get moduleId
     *
     * @return integer 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set moduleRef
     *
     * @param integer $moduleRef
     * @return AbsPageModule
     */
    public function setModuleRef($moduleRef)
    {
        $this->moduleRef = $moduleRef;

        return $this;
    }

    /**
     * Get moduleRef
     *
     * @return integer 
     */
    public function getModuleRef()
    {
        return $this->moduleRef;
    }

    /**
     * Set modulePage
     *
     * @param string $modulePage
     * @return AbsPageModule
     */
    public function setModulePage($modulePage)
    {
        $this->modulePage = $modulePage;

        return $this;
    }

    /**
     * Get modulePage
     *
     * @return string 
     */
    public function getModulePage()
    {
        return $this->modulePage;
    }

    /**
     * Set moduleTitre
     *
     * @param string $moduleTitre
     * @return AbsPageModule
     */
    public function setModuleTitre($moduleTitre)
    {
        $this->moduleTitre = $moduleTitre;

        return $this;
    }

    /**
     * Get moduleTitre
     *
     * @return string 
     */
    public function getModuleTitre()
    {
        return $this->moduleTitre;
    }

    /**
     * Set moduleUrl
     *
     * @param string $moduleUrl
     * @return AbsPageModule
     */
    public function setModuleUrl($moduleUrl)
    {
        $this->moduleUrl = $moduleUrl;

        return $this;
    }

    /**
     * Get moduleUrl
     *
     * @return string 
     */
    public function getModuleUrl()
    {
        return $this->moduleUrl;
    }

    /**
     * Set moduleOrdre
     *
     * @param integer $moduleOrdre
     * @return AbsPageModule
     */
    public function setModuleOrdre($moduleOrdre)
    {
        $this->moduleOrdre = $moduleOrdre;

        return $this;
    }

    /**
     * Get moduleOrdre
     *
     * @return integer 
     */
    public function getModuleOrdre()
    {
        return $this->moduleOrdre;
    }

    /**
     * Set moduleEtat
     *
     * @param integer $moduleEtat
     * @return AbsPageModule
     */
    public function setModuleEtat($moduleEtat)
    {
        $this->moduleEtat = $moduleEtat;

        return $this;
    }

    /**
     * Get moduleEtat
     *
     * @return integer 
     */
    public function getModuleEtat()
    {
        return $this->moduleEtat;
    }
}
