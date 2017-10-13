<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsCopyright
 *
 * @ORM\Table(name="abs_copyright")
 * @ORM\Entity
 */
class AbsCopyright
{
    /**
     * @var integer
     *
     * @ORM\Column(name="copyright_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $copyrightId;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright_", type="string", length=255, nullable=false)
     */
    private $copyright;



    /**
     * Get copyrightId
     *
     * @return integer 
     */
    public function getCopyrightId()
    {
        return $this->copyrightId;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     * @return AbsCopyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string 
     */
    public function getCopyright()
    {
        return $this->copyright;
    }
}
