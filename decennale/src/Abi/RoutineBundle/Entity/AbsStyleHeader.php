<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsStyleHeader
 *
 * @ORM\Table(name="abs_style_header", uniqueConstraints={@ORM\UniqueConstraint(name="hed_id", columns={"hed_id"})})
 * @ORM\Entity
 */
class AbsStyleHeader
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hed_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hedId;

    /**
     * @var string
     *
     * @ORM\Column(name="hed_style", type="text", nullable=false)
     */
    private $hedStyle;



    /**
     * Get hedId
     *
     * @return integer 
     */
    public function getHedId()
    {
        return $this->hedId;
    }

    /**
     * Set hedStyle
     *
     * @param string $hedStyle
     * @return AbsStyleHeader
     */
    public function setHedStyle($hedStyle)
    {
        $this->hedStyle = $hedStyle;

        return $this;
    }

    /**
     * Get hedStyle
     *
     * @return string 
     */
    public function getHedStyle()
    {
        return $this->hedStyle;
    }
}
