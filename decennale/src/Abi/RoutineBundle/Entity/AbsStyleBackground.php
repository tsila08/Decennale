<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsStyleBackground
 *
 * @ORM\Table(name="abs_style_background", uniqueConstraints={@ORM\UniqueConstraint(name="bad_id", columns={"bad_id"})})
 * @ORM\Entity
 */
class AbsStyleBackground
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bad_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $badId;

    /**
     * @var string
     *
     * @ORM\Column(name="bad_style", type="text", nullable=false)
     */
    private $badStyle;



    /**
     * Get badId
     *
     * @return integer 
     */
    public function getBadId()
    {
        return $this->badId;
    }

    /**
     * Set badStyle
     *
     * @param string $badStyle
     * @return AbsStyleBackground
     */
    public function setBadStyle($badStyle)
    {
        $this->badStyle = $badStyle;

        return $this;
    }

    /**
     * Get badStyle
     *
     * @return string 
     */
    public function getBadStyle()
    {
        return $this->badStyle;
    }
}
