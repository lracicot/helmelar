<?php

namespace Helmelar\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\PlayerBundle\Entity\Guild
 *
 * @ORM\Table(name="GUILD")
 * @ORM\Entity
 */
class Guild
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="GUILD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $guildName
     *
     * @ORM\Column(name="GUILD_NAME", type="string", length=255, nullable=false)
     */
    private $guildName;

    /**
     * @var boolean $guildStatus
     *
     * @ORM\Column(name="GUILD_STATUS", type="boolean", nullable=false)
     */
    private $guildStatus;

    /**
     * @var integer $helmGodId
     *
     * @ORM\Column(name="HELM_GOD_ID", type="integer", nullable=false)
     */
    private $helmGodId;

    /**
     * @var integer $helmCultId
     *
     * @ORM\Column(name="HELM_CULT_ID", type="integer", nullable=false)
     */
    private $helmCultId;

    /**
     * @var integer $helmAlignId
     *
     * @ORM\Column(name="HELM_ALIGN_ID", type="integer", nullable=false)
     */
    private $helmAlignId;

    /**
     * @var string $guildPrivBg
     *
     * @ORM\Column(name="GUILD_PRIV_BG", type="text", nullable=false)
     */
    private $guildPrivBg;

    /**
     * @var string $guildPubBg
     *
     * @ORM\Column(name="GUILD_PUB_BG", type="text", nullable=false)
     */
    private $guildPubBg;

    /**
     * @var string $guildGoal
     *
     * @ORM\Column(name="GUILD_GOAL", type="text", nullable=false)
     */
    private $guildGoal;

    /**
     * @var \DateTime $guildCreation
     *
     * @ORM\Column(name="GUILD_CREATION", type="datetime", nullable=false)
     */
    private $guildCreation;

    /**
     * @var string $guildNote
     *
     * @ORM\Column(name="GUILD_NOTE", type="text", nullable=false)
     */
    private $guildNote;



    /**
     * Get getId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set guildName
     *
     * @param string $guildName
     * @return Guild
     */
    public function setGuildName($guildName)
    {
        $this->guildName = $guildName;
    
        return $this;
    }

    /**
     * Get guildName
     *
     * @return string 
     */
    public function getGuildName()
    {
        return $this->guildName;
    }

    /**
     * Set guildStatus
     *
     * @param boolean $guildStatus
     * @return Guild
     */
    public function setGuildStatus($guildStatus)
    {
        $this->guildStatus = $guildStatus;
    
        return $this;
    }

    /**
     * Get guildStatus
     *
     * @return boolean 
     */
    public function getGuildStatus()
    {
        return $this->guildStatus;
    }

    /**
     * Set helmGodId
     *
     * @param integer $helmGodId
     * @return Guild
     */
    public function setHelmGodId($helmGodId)
    {
        $this->helmGodId = $helmGodId;
    
        return $this;
    }

    /**
     * Get helmGodId
     *
     * @return integer 
     */
    public function getHelmGodId()
    {
        return $this->helmGodId;
    }

    /**
     * Set helmCultId
     *
     * @param integer $helmCultId
     * @return Guild
     */
    public function setHelmCultId($helmCultId)
    {
        $this->helmCultId = $helmCultId;
    
        return $this;
    }

    /**
     * Get helmCultId
     *
     * @return integer 
     */
    public function getHelmCultId()
    {
        return $this->helmCultId;
    }

    /**
     * Set helmAlignId
     *
     * @param integer $helmAlignId
     * @return Guild
     */
    public function setHelmAlignId($helmAlignId)
    {
        $this->helmAlignId = $helmAlignId;
    
        return $this;
    }

    /**
     * Get helmAlignId
     *
     * @return integer 
     */
    public function getHelmAlignId()
    {
        return $this->helmAlignId;
    }

    /**
     * Set guildPrivBg
     *
     * @param string $guildPrivBg
     * @return Guild
     */
    public function setGuildPrivBg($guildPrivBg)
    {
        $this->guildPrivBg = $guildPrivBg;
    
        return $this;
    }

    /**
     * Get guildPrivBg
     *
     * @return string 
     */
    public function getGuildPrivBg()
    {
        return $this->guildPrivBg;
    }

    /**
     * Set guildPubBg
     *
     * @param string $guildPubBg
     * @return Guild
     */
    public function setGuildPubBg($guildPubBg)
    {
        $this->guildPubBg = $guildPubBg;
    
        return $this;
    }

    /**
     * Get guildPubBg
     *
     * @return string 
     */
    public function getGuildPubBg()
    {
        return $this->guildPubBg;
    }

    /**
     * Set guildGoal
     *
     * @param string $guildGoal
     * @return Guild
     */
    public function setGuildGoal($guildGoal)
    {
        $this->guildGoal = $guildGoal;
    
        return $this;
    }

    /**
     * Get guildGoal
     *
     * @return string 
     */
    public function getGuildGoal()
    {
        return $this->guildGoal;
    }

    /**
     * Set guildCreation
     *
     * @param \DateTime $guildCreation
     * @return Guild
     */
    public function setGuildCreation($guildCreation)
    {
        $this->guildCreation = $guildCreation;
    
        return $this;
    }

    /**
     * Get guildCreation
     *
     * @return \DateTime 
     */
    public function getGuildCreation()
    {
        return $this->guildCreation;
    }

    /**
     * Set guildNote
     *
     * @param string $guildNote
     * @return Guild
     */
    public function setGuildNote($guildNote)
    {
        $this->guildNote = $guildNote;
    
        return $this;
    }

    /**
     * Get guildNote
     *
     * @return string 
     */
    public function getGuildNote()
    {
        return $this->guildNote;
    }
}