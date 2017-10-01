<?php

namespace Devis\DecennaleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsPageExiste
 *
 * @ORM\Table(name="abs_page_existe")
 * @ORM\Entity
 */
class AbsPageExiste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pgexit_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pgexitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgexit_ref", type="integer", nullable=false)
     */
    private $pgexitRef;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_titre", type="string", length=150, nullable=false)
     */
    private $pgexitTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_description", type="string", length=400, nullable=false)
     */
    private $pgexitDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_slug", type="string", length=200, nullable=false)
     */
    private $pgexitSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_url", type="string", length=200, nullable=false)
     */
    private $pgexitUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="pgexit_type", type="string", length=200, nullable=false)
     */
    private $pgexitType;

    /**
     * @var integer
     *
     * @ORM\Column(name="pgexit_etat", type="integer", nullable=false)
     */
    private $pgexitEtat;


}
