<?php

namespace Devis\DecennaleBundle\Entity;

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


}
