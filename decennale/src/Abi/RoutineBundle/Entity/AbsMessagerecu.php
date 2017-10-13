<?php

namespace Abi\RoutineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsMessagerecu
 *
 * @ORM\Table(name="abs_messagerecu")
 * @ORM\Entity
 */
class AbsMessagerecu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_civilite", type="string", length=20, nullable=false)
     */
    private $msgCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_nom", type="string", length=200, nullable=false)
     */
    private $msgNom;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_prenom", type="string", length=200, nullable=false)
     */
    private $msgPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_email", type="string", length=200, nullable=false)
     */
    private $msgEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_tel", type="string", length=20, nullable=false)
     */
    private $msgTel;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_objet", type="string", length=200, nullable=false)
     */
    private $msgObjet;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_message", type="string", length=255, nullable=false)
     */
    private $msgMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_etat", type="integer", nullable=false)
     */
    private $msgEtat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="msg_date", type="date", nullable=false)
     */
    private $msgDate;



    /**
     * Get msgId
     *
     * @return integer 
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * Set msgCivilite
     *
     * @param string $msgCivilite
     * @return AbsMessagerecu
     */
    public function setMsgCivilite($msgCivilite)
    {
        $this->msgCivilite = $msgCivilite;

        return $this;
    }

    /**
     * Get msgCivilite
     *
     * @return string 
     */
    public function getMsgCivilite()
    {
        return $this->msgCivilite;
    }

    /**
     * Set msgNom
     *
     * @param string $msgNom
     * @return AbsMessagerecu
     */
    public function setMsgNom($msgNom)
    {
        $this->msgNom = $msgNom;

        return $this;
    }

    /**
     * Get msgNom
     *
     * @return string 
     */
    public function getMsgNom()
    {
        return $this->msgNom;
    }

    /**
     * Set msgPrenom
     *
     * @param string $msgPrenom
     * @return AbsMessagerecu
     */
    public function setMsgPrenom($msgPrenom)
    {
        $this->msgPrenom = $msgPrenom;

        return $this;
    }

    /**
     * Get msgPrenom
     *
     * @return string 
     */
    public function getMsgPrenom()
    {
        return $this->msgPrenom;
    }

    /**
     * Set msgEmail
     *
     * @param string $msgEmail
     * @return AbsMessagerecu
     */
    public function setMsgEmail($msgEmail)
    {
        $this->msgEmail = $msgEmail;

        return $this;
    }

    /**
     * Get msgEmail
     *
     * @return string 
     */
    public function getMsgEmail()
    {
        return $this->msgEmail;
    }

    /**
     * Set msgTel
     *
     * @param string $msgTel
     * @return AbsMessagerecu
     */
    public function setMsgTel($msgTel)
    {
        $this->msgTel = $msgTel;

        return $this;
    }

    /**
     * Get msgTel
     *
     * @return string 
     */
    public function getMsgTel()
    {
        return $this->msgTel;
    }

    /**
     * Set msgObjet
     *
     * @param string $msgObjet
     * @return AbsMessagerecu
     */
    public function setMsgObjet($msgObjet)
    {
        $this->msgObjet = $msgObjet;

        return $this;
    }

    /**
     * Get msgObjet
     *
     * @return string 
     */
    public function getMsgObjet()
    {
        return $this->msgObjet;
    }

    /**
     * Set msgMessage
     *
     * @param string $msgMessage
     * @return AbsMessagerecu
     */
    public function setMsgMessage($msgMessage)
    {
        $this->msgMessage = $msgMessage;

        return $this;
    }

    /**
     * Get msgMessage
     *
     * @return string 
     */
    public function getMsgMessage()
    {
        return $this->msgMessage;
    }

    /**
     * Set msgEtat
     *
     * @param integer $msgEtat
     * @return AbsMessagerecu
     */
    public function setMsgEtat($msgEtat)
    {
        $this->msgEtat = $msgEtat;

        return $this;
    }

    /**
     * Get msgEtat
     *
     * @return integer 
     */
    public function getMsgEtat()
    {
        return $this->msgEtat;
    }

    /**
     * Set msgDate
     *
     * @param \DateTime $msgDate
     * @return AbsMessagerecu
     */
    public function setMsgDate($msgDate)
    {
        $this->msgDate = $msgDate;

        return $this;
    }

    /**
     * Get msgDate
     *
     * @return \DateTime 
     */
    public function getMsgDate()
    {
        return $this->msgDate;
    }
}
