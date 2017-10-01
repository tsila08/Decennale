<?php

namespace Devis\DecennaleBundle\Entity;

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


}
