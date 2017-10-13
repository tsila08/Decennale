<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsConnexionConfirm
 *
 * @ORM\Table(name="abs_connexion_confirm")
 * @ORM\Entity
 */
class AbsConnexionConfirm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="confirm_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $confirmId;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_pseudo", type="string", length=255, nullable=false)
     */
    private $confirmPseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_ref", type="string", length=200, nullable=false)
     */
    private $confirmRef;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_chaine", type="string", length=255, nullable=false)
     */
    private $confirmChaine;



    /**
     * Get confirmId
     *
     * @return integer 
     */
    public function getConfirmId()
    {
        return $this->confirmId;
    }

    /**
     * Set confirmPseudo
     *
     * @param string $confirmPseudo
     * @return AbsConnexionConfirm
     */
    public function setConfirmPseudo($confirmPseudo)
    {
        $this->confirmPseudo = $confirmPseudo;

        return $this;
    }

    /**
     * Get confirmPseudo
     *
     * @return string 
     */
    public function getConfirmPseudo()
    {
        return $this->confirmPseudo;
    }

    /**
     * Set confirmRef
     *
     * @param string $confirmRef
     * @return AbsConnexionConfirm
     */
    public function setConfirmRef($confirmRef)
    {
        $this->confirmRef = $confirmRef;

        return $this;
    }

    /**
     * Get confirmRef
     *
     * @return string 
     */
    public function getConfirmRef()
    {
        return $this->confirmRef;
    }

    /**
     * Set confirmChaine
     *
     * @param string $confirmChaine
     * @return AbsConnexionConfirm
     */
    public function setConfirmChaine($confirmChaine)
    {
        $this->confirmChaine = $confirmChaine;

        return $this;
    }

    /**
     * Get confirmChaine
     *
     * @return string 
     */
    public function getConfirmChaine()
    {
        return $this->confirmChaine;
    }
}
