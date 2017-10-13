<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErrorMessage
 *
 * @ORM\Table(name="error_message")
 * @ORM\Entity
 */
class ErrorMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mgId;

    /**
     * @var string
     *
     * @ORM\Column(name="mg_titre", type="string", length=70, nullable=false)
     */
    private $mgTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="mg_text", type="text", nullable=false)
     */
    private $mgText;



    /**
     * Get mgId
     *
     * @return integer 
     */
    public function getMgId()
    {
        return $this->mgId;
    }

    /**
     * Set mgTitre
     *
     * @param string $mgTitre
     * @return ErrorMessage
     */
    public function setMgTitre($mgTitre)
    {
        $this->mgTitre = $mgTitre;

        return $this;
    }

    /**
     * Get mgTitre
     *
     * @return string 
     */
    public function getMgTitre()
    {
        return $this->mgTitre;
    }

    /**
     * Set mgText
     *
     * @param string $mgText
     * @return ErrorMessage
     */
    public function setMgText($mgText)
    {
        $this->mgText = $mgText;

        return $this;
    }

    /**
     * Get mgText
     *
     * @return string 
     */
    public function getMgText()
    {
        return $this->mgText;
    }
}
