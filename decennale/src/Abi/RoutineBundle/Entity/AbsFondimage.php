<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsFondimage
 *
 * @ORM\Table(name="abs_fondimage", uniqueConstraints={@ORM\UniqueConstraint(name="fondimg_id", columns={"fondimg_id"})})
 * @ORM\Entity
 */
class AbsFondimage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fondimg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fondimgId;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_color", type="string", length=12, nullable=false)
     */
    private $fondimgColor;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_image", type="string", length=100, nullable=false)
     */
    private $fondimgImage;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_repeat", type="string", length=20, nullable=false)
     */
    private $fondimgRepeat;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_attachment", type="string", length=30, nullable=false)
     */
    private $fondimgAttachment;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_position", type="string", length=30, nullable=false)
     */
    private $fondimgPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="fondimg_opacity", type="string", length=4, nullable=false)
     */
    private $fondimgOpacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="fondimg_etat", type="integer", nullable=false)
     */
    private $fondimgEtat;



    /**
     * Get fondimgId
     *
     * @return integer 
     */
    public function getFondimgId()
    {
        return $this->fondimgId;
    }

    /**
     * Set fondimgColor
     *
     * @param string $fondimgColor
     * @return AbsFondimage
     */
    public function setFondimgColor($fondimgColor)
    {
        $this->fondimgColor = $fondimgColor;

        return $this;
    }

    /**
     * Get fondimgColor
     *
     * @return string 
     */
    public function getFondimgColor()
    {
        return $this->fondimgColor;
    }

    /**
     * Set fondimgImage
     *
     * @param string $fondimgImage
     * @return AbsFondimage
     */
    public function setFondimgImage($fondimgImage)
    {
        $this->fondimgImage = $fondimgImage;

        return $this;
    }

    /**
     * Get fondimgImage
     *
     * @return string 
     */
    public function getFondimgImage()
    {
        return $this->fondimgImage;
    }

    /**
     * Set fondimgRepeat
     *
     * @param string $fondimgRepeat
     * @return AbsFondimage
     */
    public function setFondimgRepeat($fondimgRepeat)
    {
        $this->fondimgRepeat = $fondimgRepeat;

        return $this;
    }

    /**
     * Get fondimgRepeat
     *
     * @return string 
     */
    public function getFondimgRepeat()
    {
        return $this->fondimgRepeat;
    }

    /**
     * Set fondimgAttachment
     *
     * @param string $fondimgAttachment
     * @return AbsFondimage
     */
    public function setFondimgAttachment($fondimgAttachment)
    {
        $this->fondimgAttachment = $fondimgAttachment;

        return $this;
    }

    /**
     * Get fondimgAttachment
     *
     * @return string 
     */
    public function getFondimgAttachment()
    {
        return $this->fondimgAttachment;
    }

    /**
     * Set fondimgPosition
     *
     * @param string $fondimgPosition
     * @return AbsFondimage
     */
    public function setFondimgPosition($fondimgPosition)
    {
        $this->fondimgPosition = $fondimgPosition;

        return $this;
    }

    /**
     * Get fondimgPosition
     *
     * @return string 
     */
    public function getFondimgPosition()
    {
        return $this->fondimgPosition;
    }

    /**
     * Set fondimgOpacity
     *
     * @param string $fondimgOpacity
     * @return AbsFondimage
     */
    public function setFondimgOpacity($fondimgOpacity)
    {
        $this->fondimgOpacity = $fondimgOpacity;

        return $this;
    }

    /**
     * Get fondimgOpacity
     *
     * @return string 
     */
    public function getFondimgOpacity()
    {
        return $this->fondimgOpacity;
    }

    /**
     * Set fondimgEtat
     *
     * @param integer $fondimgEtat
     * @return AbsFondimage
     */
    public function setFondimgEtat($fondimgEtat)
    {
        $this->fondimgEtat = $fondimgEtat;

        return $this;
    }

    /**
     * Get fondimgEtat
     *
     * @return integer 
     */
    public function getFondimgEtat()
    {
        return $this->fondimgEtat;
    }
}
