<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmSpell
 *
 * @ORM\Table(name="HELM_SPELL")
 * @ORM\Entity
 */
class Spell
{
    /**
     * @var integer $helmSpellId
     *
     * @ORM\Column(name="HELM_SPELL_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmSpellId;

    /**
     * @var boolean $helmSpellType
     *
     * @ORM\Column(name="HELM_SPELL_TYPE", type="boolean", nullable=false)
     */
    private $helmSpellType;

    /**
     * @var boolean $helmSpellLvl
     *
     * @ORM\Column(name="HELM_SPELL_LVL", type="boolean", nullable=false)
     */
    private $helmSpellLvl;

    /**
     * @var boolean $helmSpellPlan
     *
     * @ORM\Column(name="HELM_SPELL_PLAN", type="boolean", nullable=false)
     */
    private $helmSpellPlan;

    /**
     * @var integer $helmSpellGodId
     *
     * @ORM\Column(name="HELM_SPELL_GOD_ID", type="integer", nullable=false)
     */
    private $helmSpellGodId;

    /**
     * @var integer $helmSpellRaceId
     *
     * @ORM\Column(name="HELM_SPELL_RACE_ID", type="integer", nullable=false)
     */
    private $helmSpellRaceId;

    /**
     * @var string $helmSpellName
     *
     * @ORM\Column(name="HELM_SPELL_NAME", type="string", length=255, nullable=false)
     */
    private $helmSpellName;

    /**
     * @var integer $helmSpellRuneId
     *
     * @ORM\Column(name="HELM_SPELL_RUNE_ID", type="integer", nullable=false)
     */
    private $helmSpellRuneId;

    /**
     * @var string $helmSpellCast
     *
     * @ORM\Column(name="HELM_SPELL_CAST", type="text", nullable=false)
     */
    private $helmSpellCast;

    /**
     * @var string $helmSpellFinalWords
     *
     * @ORM\Column(name="HELM_SPELL_FINAL_WORDS", type="text", nullable=false)
     */
    private $helmSpellFinalWords;

    /**
     * @var string $helmSpellEffect
     *
     * @ORM\Column(name="HELM_SPELL_EFFECT", type="text", nullable=false)
     */
    private $helmSpellEffect;

    /**
     * @var string $helmSpellDuration
     *
     * @ORM\Column(name="HELM_SPELL_DURATION", type="string", length=255, nullable=false)
     */
    private $helmSpellDuration;

    /**
     * @var string $helmSpellSpecialDuration
     *
     * @ORM\Column(name="HELM_SPELL_SPECIAL_DURATION", type="string", length=70, nullable=false)
     */
    private $helmSpellSpecialDuration;

    /**
     * @var string $helmSpellReagent
     *
     * @ORM\Column(name="HELM_SPELL_REAGENT", type="text", nullable=false)
     */
    private $helmSpellReagent;

    /**
     * @var string $helmSpellRestriction
     *
     * @ORM\Column(name="HELM_SPELL_RESTRICTION", type="text", nullable=false)
     */
    private $helmSpellRestriction;

    /**
     * @var string $helmSpellSpecial
     *
     * @ORM\Column(name="HELM_SPELL_SPECIAL", type="text", nullable=false)
     */
    private $helmSpellSpecial;

    /**
     * @var string $helmSpellHistory
     *
     * @ORM\Column(name="HELM_SPELL_HISTORY", type="text", nullable=false)
     */
    private $helmSpellHistory;

    /**
     * @var integer $helmSpellCreatorId
     *
     * @ORM\Column(name="HELM_SPELL_CREATOR_ID", type="integer", nullable=false)
     */
    private $helmSpellCreatorId;

    /**
     * @var \DateTime $helmSpellDate
     *
     * @ORM\Column(name="HELM_SPELL_DATE", type="datetime", nullable=false)
     */
    private $helmSpellDate;

    /**
     * @var \DateTime $helmSpellDateRev
     *
     * @ORM\Column(name="HELM_SPELL_DATE_REV", type="datetime", nullable=false)
     */
    private $helmSpellDateRev;

    /**
     * @var string $helmSpellNote
     *
     * @ORM\Column(name="HELM_SPELL_NOTE", type="text", nullable=false)
     */
    private $helmSpellNote;



    /**
     * Get helmSpellId
     *
     * @return integer 
     */
    public function getHelmSpellId()
    {
        return $this->helmSpellId;
    }

    /**
     * Set helmSpellType
     *
     * @param boolean $helmSpellType
     * @return HelmSpell
     */
    public function setHelmSpellType($helmSpellType)
    {
        $this->helmSpellType = $helmSpellType;
    
        return $this;
    }

    /**
     * Get helmSpellType
     *
     * @return boolean 
     */
    public function getHelmSpellType()
    {
        return $this->helmSpellType;
    }

    /**
     * Set helmSpellLvl
     *
     * @param boolean $helmSpellLvl
     * @return HelmSpell
     */
    public function setHelmSpellLvl($helmSpellLvl)
    {
        $this->helmSpellLvl = $helmSpellLvl;
    
        return $this;
    }

    /**
     * Get helmSpellLvl
     *
     * @return boolean 
     */
    public function getHelmSpellLvl()
    {
        return $this->helmSpellLvl;
    }

    /**
     * Set helmSpellPlan
     *
     * @param boolean $helmSpellPlan
     * @return HelmSpell
     */
    public function setHelmSpellPlan($helmSpellPlan)
    {
        $this->helmSpellPlan = $helmSpellPlan;
    
        return $this;
    }

    /**
     * Get helmSpellPlan
     *
     * @return boolean 
     */
    public function getHelmSpellPlan()
    {
        return $this->helmSpellPlan;
    }

    /**
     * Set helmSpellGodId
     *
     * @param integer $helmSpellGodId
     * @return HelmSpell
     */
    public function setHelmSpellGodId($helmSpellGodId)
    {
        $this->helmSpellGodId = $helmSpellGodId;
    
        return $this;
    }

    /**
     * Get helmSpellGodId
     *
     * @return integer 
     */
    public function getHelmSpellGodId()
    {
        return $this->helmSpellGodId;
    }

    /**
     * Set helmSpellRaceId
     *
     * @param integer $helmSpellRaceId
     * @return HelmSpell
     */
    public function setHelmSpellRaceId($helmSpellRaceId)
    {
        $this->helmSpellRaceId = $helmSpellRaceId;
    
        return $this;
    }

    /**
     * Get helmSpellRaceId
     *
     * @return integer 
     */
    public function getHelmSpellRaceId()
    {
        return $this->helmSpellRaceId;
    }

    /**
     * Set helmSpellName
     *
     * @param string $helmSpellName
     * @return HelmSpell
     */
    public function setHelmSpellName($helmSpellName)
    {
        $this->helmSpellName = $helmSpellName;
    
        return $this;
    }

    /**
     * Get helmSpellName
     *
     * @return string 
     */
    public function getHelmSpellName()
    {
        return $this->helmSpellName;
    }

    /**
     * Set helmSpellRuneId
     *
     * @param integer $helmSpellRuneId
     * @return HelmSpell
     */
    public function setHelmSpellRuneId($helmSpellRuneId)
    {
        $this->helmSpellRuneId = $helmSpellRuneId;
    
        return $this;
    }

    /**
     * Get helmSpellRuneId
     *
     * @return integer 
     */
    public function getHelmSpellRuneId()
    {
        return $this->helmSpellRuneId;
    }

    /**
     * Set helmSpellCast
     *
     * @param string $helmSpellCast
     * @return HelmSpell
     */
    public function setHelmSpellCast($helmSpellCast)
    {
        $this->helmSpellCast = $helmSpellCast;
    
        return $this;
    }

    /**
     * Get helmSpellCast
     *
     * @return string 
     */
    public function getHelmSpellCast()
    {
        return $this->helmSpellCast;
    }

    /**
     * Set helmSpellFinalWords
     *
     * @param string $helmSpellFinalWords
     * @return HelmSpell
     */
    public function setHelmSpellFinalWords($helmSpellFinalWords)
    {
        $this->helmSpellFinalWords = $helmSpellFinalWords;
    
        return $this;
    }

    /**
     * Get helmSpellFinalWords
     *
     * @return string 
     */
    public function getHelmSpellFinalWords()
    {
        return $this->helmSpellFinalWords;
    }

    /**
     * Set helmSpellEffect
     *
     * @param string $helmSpellEffect
     * @return HelmSpell
     */
    public function setHelmSpellEffect($helmSpellEffect)
    {
        $this->helmSpellEffect = $helmSpellEffect;
    
        return $this;
    }

    /**
     * Get helmSpellEffect
     *
     * @return string 
     */
    public function getHelmSpellEffect()
    {
        return $this->helmSpellEffect;
    }

    /**
     * Set helmSpellDuration
     *
     * @param string $helmSpellDuration
     * @return HelmSpell
     */
    public function setHelmSpellDuration($helmSpellDuration)
    {
        $this->helmSpellDuration = $helmSpellDuration;
    
        return $this;
    }

    /**
     * Get helmSpellDuration
     *
     * @return string 
     */
    public function getHelmSpellDuration()
    {
        return $this->helmSpellDuration;
    }

    /**
     * Set helmSpellSpecialDuration
     *
     * @param string $helmSpellSpecialDuration
     * @return HelmSpell
     */
    public function setHelmSpellSpecialDuration($helmSpellSpecialDuration)
    {
        $this->helmSpellSpecialDuration = $helmSpellSpecialDuration;
    
        return $this;
    }

    /**
     * Get helmSpellSpecialDuration
     *
     * @return string 
     */
    public function getHelmSpellSpecialDuration()
    {
        return $this->helmSpellSpecialDuration;
    }

    /**
     * Set helmSpellReagent
     *
     * @param string $helmSpellReagent
     * @return HelmSpell
     */
    public function setHelmSpellReagent($helmSpellReagent)
    {
        $this->helmSpellReagent = $helmSpellReagent;
    
        return $this;
    }

    /**
     * Get helmSpellReagent
     *
     * @return string 
     */
    public function getHelmSpellReagent()
    {
        return $this->helmSpellReagent;
    }

    /**
     * Set helmSpellRestriction
     *
     * @param string $helmSpellRestriction
     * @return HelmSpell
     */
    public function setHelmSpellRestriction($helmSpellRestriction)
    {
        $this->helmSpellRestriction = $helmSpellRestriction;
    
        return $this;
    }

    /**
     * Get helmSpellRestriction
     *
     * @return string 
     */
    public function getHelmSpellRestriction()
    {
        return $this->helmSpellRestriction;
    }

    /**
     * Set helmSpellSpecial
     *
     * @param string $helmSpellSpecial
     * @return HelmSpell
     */
    public function setHelmSpellSpecial($helmSpellSpecial)
    {
        $this->helmSpellSpecial = $helmSpellSpecial;
    
        return $this;
    }

    /**
     * Get helmSpellSpecial
     *
     * @return string 
     */
    public function getHelmSpellSpecial()
    {
        return $this->helmSpellSpecial;
    }

    /**
     * Set helmSpellHistory
     *
     * @param string $helmSpellHistory
     * @return HelmSpell
     */
    public function setHelmSpellHistory($helmSpellHistory)
    {
        $this->helmSpellHistory = $helmSpellHistory;
    
        return $this;
    }

    /**
     * Get helmSpellHistory
     *
     * @return string 
     */
    public function getHelmSpellHistory()
    {
        return $this->helmSpellHistory;
    }

    /**
     * Set helmSpellCreatorId
     *
     * @param integer $helmSpellCreatorId
     * @return HelmSpell
     */
    public function setHelmSpellCreatorId($helmSpellCreatorId)
    {
        $this->helmSpellCreatorId = $helmSpellCreatorId;
    
        return $this;
    }

    /**
     * Get helmSpellCreatorId
     *
     * @return integer 
     */
    public function getHelmSpellCreatorId()
    {
        return $this->helmSpellCreatorId;
    }

    /**
     * Set helmSpellDate
     *
     * @param \DateTime $helmSpellDate
     * @return HelmSpell
     */
    public function setHelmSpellDate($helmSpellDate)
    {
        $this->helmSpellDate = $helmSpellDate;
    
        return $this;
    }

    /**
     * Get helmSpellDate
     *
     * @return \DateTime 
     */
    public function getHelmSpellDate()
    {
        return $this->helmSpellDate;
    }

    /**
     * Set helmSpellDateRev
     *
     * @param \DateTime $helmSpellDateRev
     * @return HelmSpell
     */
    public function setHelmSpellDateRev($helmSpellDateRev)
    {
        $this->helmSpellDateRev = $helmSpellDateRev;
    
        return $this;
    }

    /**
     * Get helmSpellDateRev
     *
     * @return \DateTime 
     */
    public function getHelmSpellDateRev()
    {
        return $this->helmSpellDateRev;
    }

    /**
     * Set helmSpellNote
     *
     * @param string $helmSpellNote
     * @return HelmSpell
     */
    public function setHelmSpellNote($helmSpellNote)
    {
        $this->helmSpellNote = $helmSpellNote;
    
        return $this;
    }

    /**
     * Get helmSpellNote
     *
     * @return string 
     */
    public function getHelmSpellNote()
    {
        return $this->helmSpellNote;
    }
}