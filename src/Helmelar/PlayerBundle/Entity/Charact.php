<?php

namespace Helmelar\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\PlayerBundle\Entity\Charact
 *
 * @ORM\Table(name="CHARACT")
 * @ORM\Entity
 */
class Charact
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="CHARACT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $playerId
     *
     * @ORM\Column(name="PLAYER_ID", type="integer", nullable=false)
     */
    private $playerId;

    /**
     * @var string $charactName
     *
     * @ORM\Column(name="CHARACT_NAME", type="string", length=255, nullable=false)
     */
    private $charactName;

    /**
     * @var string $charactTitle
     *
     * @ORM\Column(name="CHARACT_TITLE", type="string", length=255, nullable=false)
     */
    private $charactTitle;

    /**
     * @var boolean $charactLevel
     *
     * @ORM\Column(name="CHARACT_LEVEL", type="boolean", nullable=false)
     */
    private $charactLevel;

    /**
     * @var boolean $charactPvTrunk
     *
     * @ORM\Column(name="CHARACT_PV_TRUNK", type="boolean", nullable=false)
     */
    private $charactPvTrunk;

    /**
     * @var boolean $charactPvArms
     *
     * @ORM\Column(name="CHARACT_PV_ARMS", type="boolean", nullable=false)
     */
    private $charactPvArms;

    /**
     * @var boolean $charactPvLegs
     *
     * @ORM\Column(name="CHARACT_PV_LEGS", type="boolean", nullable=false)
     */
    private $charactPvLegs;

    /**
     * @var boolean $charactFate
     *
     * @ORM\Column(name="CHARACT_FATE", type="boolean", nullable=false)
     */
    private $charactFate;

    /**
     * @var string $charactBonus
     *
     * @ORM\Column(name="CHARACT_BONUS", type="text", nullable=true)
     */
    private $charactBonus;

    /**
     * @var string $charactMalus
     *
     * @ORM\Column(name="CHARACT_MALUS", type="text", nullable=true)
     */
    private $charactMalus;

    /**
     * @var string $charactPrivBg
     *
     * @ORM\Column(name="CHARACT_PRIV_BG", type="text", nullable=true)
     */
    private $charactPrivBg;

    /**
     * @var string $charactPubBg
     *
     * @ORM\Column(name="CHARACT_PUB_BG", type="text", nullable=true)
     */
    private $charactPubBg;

    /**
     * @var string $charactGoal
     *
     * @ORM\Column(name="CHARACT_GOAL", type="text", nullable=true)
     */
    private $charactGoal;

    /**
     * @var integer $charactMoney
     *
     * @ORM\Column(name="CHARACT_MONEY", type="integer", nullable=true)
     */
    private $charactMoney;

    /**
     * @var integer $charactStone
     *
     * @ORM\Column(name="CHARACT_STONE", type="integer", nullable=true)
     */
    private $charactStone;

    /**
     * @var \DateTime $charactCreation
     *
     * @ORM\Column(name="CHARACT_CREATION", type="datetime", nullable=false)
     */
    private $charactCreation;

    /**
     * @var string $charactNotes
     *
     * @ORM\Column(name="CHARACT_NOTES", type="text", nullable=true)
     */
    private $charactNotes;

    /**
     * @var integer $alignId
     *
     * @ORM\Column(name="ALIGN_ID", type="integer", nullable=false)
     */
    private $alignId;

    /**
     * @var integer $cultId
     *
     * @ORM\Column(name="CULT_ID", type="integer", nullable=false)
     */
    private $cultId;

    /**
     * @var integer $raceId
     *
     * @ORM\Column(name="RACE_ID", type="integer", nullable=false)
     */
    private $raceId;

    /**
     * @var integer $godId
     *
     * @ORM\Column(name="GOD_ID", type="integer", nullable=false)
     */
    private $godId;



    /**
     * Get getId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set playerId
     *
     * @param integer $playerId
     * @return Charact
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;
    
        return $this;
    }

    /**
     * Get playerId
     *
     * @return integer 
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set charactName
     *
     * @param string $charactName
     * @return Charact
     */
    public function setCharactName($charactName)
    {
        $this->charactName = $charactName;
    
        return $this;
    }

    /**
     * Get charactName
     *
     * @return string 
     */
    public function getCharactName()
    {
        return $this->charactName;
    }

    /**
     * Set charactTitle
     *
     * @param string $charactTitle
     * @return Charact
     */
    public function setCharactTitle($charactTitle)
    {
        $this->charactTitle = $charactTitle;
    
        return $this;
    }

    /**
     * Get charactTitle
     *
     * @return string 
     */
    public function getCharactTitle()
    {
        return $this->charactTitle;
    }

    /**
     * Set charactLevel
     *
     * @param boolean $charactLevel
     * @return Charact
     */
    public function setCharactLevel($charactLevel)
    {
        $this->charactLevel = $charactLevel;
    
        return $this;
    }

    /**
     * Get charactLevel
     *
     * @return boolean 
     */
    public function getCharactLevel()
    {
        return $this->charactLevel;
    }

    /**
     * Set charactPvTrunk
     *
     * @param boolean $charactPvTrunk
     * @return Charact
     */
    public function setCharactPvTrunk($charactPvTrunk)
    {
        $this->charactPvTrunk = $charactPvTrunk;
    
        return $this;
    }

    /**
     * Get charactPvTrunk
     *
     * @return boolean 
     */
    public function getCharactPvTrunk()
    {
        return $this->charactPvTrunk;
    }

    /**
     * Set charactPvArms
     *
     * @param boolean $charactPvArms
     * @return Charact
     */
    public function setCharactPvArms($charactPvArms)
    {
        $this->charactPvArms = $charactPvArms;
    
        return $this;
    }

    /**
     * Get charactPvArms
     *
     * @return boolean 
     */
    public function getCharactPvArms()
    {
        return $this->charactPvArms;
    }

    /**
     * Set charactPvLegs
     *
     * @param boolean $charactPvLegs
     * @return Charact
     */
    public function setCharactPvLegs($charactPvLegs)
    {
        $this->charactPvLegs = $charactPvLegs;
    
        return $this;
    }

    /**
     * Get charactPvLegs
     *
     * @return boolean 
     */
    public function getCharactPvLegs()
    {
        return $this->charactPvLegs;
    }

    /**
     * Set charactFate
     *
     * @param boolean $charactFate
     * @return Charact
     */
    public function setCharactFate($charactFate)
    {
        $this->charactFate = $charactFate;
    
        return $this;
    }

    /**
     * Get charactFate
     *
     * @return boolean 
     */
    public function getCharactFate()
    {
        return $this->charactFate;
    }

    /**
     * Set charactBonus
     *
     * @param string $charactBonus
     * @return Charact
     */
    public function setCharactBonus($charactBonus)
    {
        $this->charactBonus = $charactBonus;
    
        return $this;
    }

    /**
     * Get charactBonus
     *
     * @return string 
     */
    public function getCharactBonus()
    {
        return $this->charactBonus;
    }

    /**
     * Set charactMalus
     *
     * @param string $charactMalus
     * @return Charact
     */
    public function setCharactMalus($charactMalus)
    {
        $this->charactMalus = $charactMalus;
    
        return $this;
    }

    /**
     * Get charactMalus
     *
     * @return string 
     */
    public function getCharactMalus()
    {
        return $this->charactMalus;
    }

    /**
     * Set charactPrivBg
     *
     * @param string $charactPrivBg
     * @return Charact
     */
    public function setCharactPrivBg($charactPrivBg)
    {
        $this->charactPrivBg = $charactPrivBg;
    
        return $this;
    }

    /**
     * Get charactPrivBg
     *
     * @return string 
     */
    public function getCharactPrivBg()
    {
        return $this->charactPrivBg;
    }

    /**
     * Set charactPubBg
     *
     * @param string $charactPubBg
     * @return Charact
     */
    public function setCharactPubBg($charactPubBg)
    {
        $this->charactPubBg = $charactPubBg;
    
        return $this;
    }

    /**
     * Get charactPubBg
     *
     * @return string 
     */
    public function getCharactPubBg()
    {
        return $this->charactPubBg;
    }

    /**
     * Set charactGoal
     *
     * @param string $charactGoal
     * @return Charact
     */
    public function setCharactGoal($charactGoal)
    {
        $this->charactGoal = $charactGoal;
    
        return $this;
    }

    /**
     * Get charactGoal
     *
     * @return string 
     */
    public function getCharactGoal()
    {
        return $this->charactGoal;
    }

    /**
     * Set charactMoney
     *
     * @param integer $charactMoney
     * @return Charact
     */
    public function setCharactMoney($charactMoney)
    {
        $this->charactMoney = $charactMoney;
    
        return $this;
    }

    /**
     * Get charactMoney
     *
     * @return integer 
     */
    public function getCharactMoney()
    {
        return $this->charactMoney;
    }

    /**
     * Set charactStone
     *
     * @param integer $charactStone
     * @return Charact
     */
    public function setCharactStone($charactStone)
    {
        $this->charactStone = $charactStone;
    
        return $this;
    }

    /**
     * Get charactStone
     *
     * @return integer 
     */
    public function getCharactStone()
    {
        return $this->charactStone;
    }

    /**
     * Set charactCreation
     *
     * @param \DateTime $charactCreation
     * @return Charact
     */
    public function setCharactCreation($charactCreation)
    {
        $this->charactCreation = $charactCreation;
    
        return $this;
    }

    /**
     * Get charactCreation
     *
     * @return \DateTime 
     */
    public function getCharactCreation()
    {
        return $this->charactCreation;
    }

    /**
     * Set charactNotes
     *
     * @param string $charactNotes
     * @return Charact
     */
    public function setCharactNotes($charactNotes)
    {
        $this->charactNotes = $charactNotes;
    
        return $this;
    }

    /**
     * Get charactNotes
     *
     * @return string 
     */
    public function getCharactNotes()
    {
        return $this->charactNotes;
    }

    /**
     * Set alignId
     *
     * @param integer $alignId
     * @return Charact
     */
    public function setAlignId($alignId)
    {
        $this->alignId = $alignId;
    
        return $this;
    }

    /**
     * Get alignId
     *
     * @return integer 
     */
    public function getAlignId()
    {
        return $this->alignId;
    }

    /**
     * Set cultId
     *
     * @param integer $cultId
     * @return Charact
     */
    public function setCultId($cultId)
    {
        $this->cultId = $cultId;
    
        return $this;
    }

    /**
     * Get cultId
     *
     * @return integer 
     */
    public function getCultId()
    {
        return $this->cultId;
    }

    /**
     * Set raceId
     *
     * @param integer $raceId
     * @return Charact
     */
    public function setRaceId($raceId)
    {
        $this->raceId = $raceId;
    
        return $this;
    }

    /**
     * Get raceId
     *
     * @return integer 
     */
    public function getRaceId()
    {
        return $this->raceId;
    }

    /**
     * Set godId
     *
     * @param integer $godId
     * @return Charact
     */
    public function setGodId($godId)
    {
        $this->godId = $godId;
    
        return $this;
    }

    /**
     * Get godId
     *
     * @return integer 
     */
    public function getGodId()
    {
        return $this->godId;
    }
}