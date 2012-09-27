<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmRace
 *
 * @ORM\Table(name="HELM_RACE")
 * @ORM\Entity
 */
class Race
{
    /**
     * @var integer $helmRaceId
     *
     * @ORM\Column(name="HELM_RACE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmRaceId;

    /**
     * @var string $helmRaceName
     *
     * @ORM\Column(name="HELM_RACE_NAME", type="string", length=55, nullable=false)
     */
    private $helmRaceName;

    /**
     * @var boolean $helmRaceRegeneration
     *
     * @ORM\Column(name="HELM_RACE_REGENERATION", type="boolean", nullable=false)
     */
    private $helmRaceRegeneration;

    /**
     * @var string $helmRaceDescription
     *
     * @ORM\Column(name="HELM_RACE_DESCRIPTION", type="text", nullable=true)
     */
    private $helmRaceDescription;

    /**
     * @var string $helmRaceProfil
     *
     * @ORM\Column(name="HELM_RACE_PROFIL", type="text", nullable=false)
     */
    private $helmRaceProfil;

    /**
     * @var string $helmRaceBonus
     *
     * @ORM\Column(name="HELM_RACE_BONUS", type="text", nullable=true)
     */
    private $helmRaceBonus;

    /**
     * @var string $helmRaceMalus
     *
     * @ORM\Column(name="HELM_RACE_MALUS", type="text", nullable=true)
     */
    private $helmRaceMalus;

    /**
     * @var string $helmRacePredilectionClass
     *
     * @ORM\Column(name="HELM_RACE_PREDILECTION_CLASS", type="text", nullable=false)
     */
    private $helmRacePredilectionClass;

    /**
     * @var boolean $helmRacePhysicalKnowledgeMax
     *
     * @ORM\Column(name="HELM_RACE_PHYSICAL_KNOWLEDGE_MAX", type="boolean", nullable=false)
     */
    private $helmRacePhysicalKnowledgeMax;

    /**
     * @var boolean $helmRaceMentalKnowledgeMax
     *
     * @ORM\Column(name="HELM_RACE_MENTAL_KNOWLEDGE_MAX", type="boolean", nullable=false)
     */
    private $helmRaceMentalKnowledgeMax;

    /**
     * @var boolean $helmRaceMagicKnowledgeMax
     *
     * @ORM\Column(name="HELM_RACE_MAGIC_KNOWLEDGE_MAX", type="boolean", nullable=false)
     */
    private $helmRaceMagicKnowledgeMax;

    /**
     * @var string $helmRaceForbiddenKnowledge
     *
     * @ORM\Column(name="HELM_RACE_FORBIDDEN_KNOWLEDGE", type="text", nullable=false)
     */
    private $helmRaceForbiddenKnowledge;

    /**
     * @var string $helmRaceRestriction
     *
     * @ORM\Column(name="HELM_RACE_RESTRICTION", type="text", nullable=false)
     */
    private $helmRaceRestriction;

    /**
     * @var integer $helmRaceLanguage
     *
     * @ORM\Column(name="HELM_RACE_LANGUAGE", type="integer", nullable=true)
     */
    private $helmRaceLanguage;

    /**
     * @var boolean $helmRaceType
     *
     * @ORM\Column(name="HELM_RACE_TYPE", type="boolean", nullable=true)
     */
    private $helmRaceType;

    /**
     * @var boolean $helmRaceBehavior
     *
     * @ORM\Column(name="HELM_RACE_BEHAVIOR", type="boolean", nullable=false)
     */
    private $helmRaceBehavior;

    /**
     * @var boolean $helmRaceOrder
     *
     * @ORM\Column(name="HELM_RACE_ORDER", type="boolean", nullable=false)
     */
    private $helmRaceOrder;

    /**
     * @var string $helmRaceHistory
     *
     * @ORM\Column(name="HELM_RACE_HISTORY", type="text", nullable=false)
     */
    private $helmRaceHistory;



    /**
     * Get helmRaceId
     *
     * @return integer 
     */
    public function getHelmRaceId()
    {
        return $this->helmRaceId;
    }

    /**
     * Set helmRaceName
     *
     * @param string $helmRaceName
     * @return HelmRace
     */
    public function setHelmRaceName($helmRaceName)
    {
        $this->helmRaceName = $helmRaceName;
    
        return $this;
    }

    /**
     * Get helmRaceName
     *
     * @return string 
     */
    public function getHelmRaceName()
    {
        return $this->helmRaceName;
    }

    /**
     * Set helmRaceRegeneration
     *
     * @param boolean $helmRaceRegeneration
     * @return HelmRace
     */
    public function setHelmRaceRegeneration($helmRaceRegeneration)
    {
        $this->helmRaceRegeneration = $helmRaceRegeneration;
    
        return $this;
    }

    /**
     * Get helmRaceRegeneration
     *
     * @return boolean 
     */
    public function getHelmRaceRegeneration()
    {
        return $this->helmRaceRegeneration;
    }

    /**
     * Set helmRaceDescription
     *
     * @param string $helmRaceDescription
     * @return HelmRace
     */
    public function setHelmRaceDescription($helmRaceDescription)
    {
        $this->helmRaceDescription = $helmRaceDescription;
    
        return $this;
    }

    /**
     * Get helmRaceDescription
     *
     * @return string 
     */
    public function getHelmRaceDescription()
    {
        return $this->helmRaceDescription;
    }

    /**
     * Set helmRaceProfil
     *
     * @param string $helmRaceProfil
     * @return HelmRace
     */
    public function setHelmRaceProfil($helmRaceProfil)
    {
        $this->helmRaceProfil = $helmRaceProfil;
    
        return $this;
    }

    /**
     * Get helmRaceProfil
     *
     * @return string 
     */
    public function getHelmRaceProfil()
    {
        return $this->helmRaceProfil;
    }

    /**
     * Set helmRaceBonus
     *
     * @param string $helmRaceBonus
     * @return HelmRace
     */
    public function setHelmRaceBonus($helmRaceBonus)
    {
        $this->helmRaceBonus = $helmRaceBonus;
    
        return $this;
    }

    /**
     * Get helmRaceBonus
     *
     * @return string 
     */
    public function getHelmRaceBonus()
    {
        return $this->helmRaceBonus;
    }

    /**
     * Set helmRaceMalus
     *
     * @param string $helmRaceMalus
     * @return HelmRace
     */
    public function setHelmRaceMalus($helmRaceMalus)
    {
        $this->helmRaceMalus = $helmRaceMalus;
    
        return $this;
    }

    /**
     * Get helmRaceMalus
     *
     * @return string 
     */
    public function getHelmRaceMalus()
    {
        return $this->helmRaceMalus;
    }

    /**
     * Set helmRacePredilectionClass
     *
     * @param string $helmRacePredilectionClass
     * @return HelmRace
     */
    public function setHelmRacePredilectionClass($helmRacePredilectionClass)
    {
        $this->helmRacePredilectionClass = $helmRacePredilectionClass;
    
        return $this;
    }

    /**
     * Get helmRacePredilectionClass
     *
     * @return string 
     */
    public function getHelmRacePredilectionClass()
    {
        return $this->helmRacePredilectionClass;
    }

    /**
     * Set helmRacePhysicalKnowledgeMax
     *
     * @param boolean $helmRacePhysicalKnowledgeMax
     * @return HelmRace
     */
    public function setHelmRacePhysicalKnowledgeMax($helmRacePhysicalKnowledgeMax)
    {
        $this->helmRacePhysicalKnowledgeMax = $helmRacePhysicalKnowledgeMax;
    
        return $this;
    }

    /**
     * Get helmRacePhysicalKnowledgeMax
     *
     * @return boolean 
     */
    public function getHelmRacePhysicalKnowledgeMax()
    {
        return $this->helmRacePhysicalKnowledgeMax;
    }

    /**
     * Set helmRaceMentalKnowledgeMax
     *
     * @param boolean $helmRaceMentalKnowledgeMax
     * @return HelmRace
     */
    public function setHelmRaceMentalKnowledgeMax($helmRaceMentalKnowledgeMax)
    {
        $this->helmRaceMentalKnowledgeMax = $helmRaceMentalKnowledgeMax;
    
        return $this;
    }

    /**
     * Get helmRaceMentalKnowledgeMax
     *
     * @return boolean 
     */
    public function getHelmRaceMentalKnowledgeMax()
    {
        return $this->helmRaceMentalKnowledgeMax;
    }

    /**
     * Set helmRaceMagicKnowledgeMax
     *
     * @param boolean $helmRaceMagicKnowledgeMax
     * @return HelmRace
     */
    public function setHelmRaceMagicKnowledgeMax($helmRaceMagicKnowledgeMax)
    {
        $this->helmRaceMagicKnowledgeMax = $helmRaceMagicKnowledgeMax;
    
        return $this;
    }

    /**
     * Get helmRaceMagicKnowledgeMax
     *
     * @return boolean 
     */
    public function getHelmRaceMagicKnowledgeMax()
    {
        return $this->helmRaceMagicKnowledgeMax;
    }

    /**
     * Set helmRaceForbiddenKnowledge
     *
     * @param string $helmRaceForbiddenKnowledge
     * @return HelmRace
     */
    public function setHelmRaceForbiddenKnowledge($helmRaceForbiddenKnowledge)
    {
        $this->helmRaceForbiddenKnowledge = $helmRaceForbiddenKnowledge;
    
        return $this;
    }

    /**
     * Get helmRaceForbiddenKnowledge
     *
     * @return string 
     */
    public function getHelmRaceForbiddenKnowledge()
    {
        return $this->helmRaceForbiddenKnowledge;
    }

    /**
     * Set helmRaceRestriction
     *
     * @param string $helmRaceRestriction
     * @return HelmRace
     */
    public function setHelmRaceRestriction($helmRaceRestriction)
    {
        $this->helmRaceRestriction = $helmRaceRestriction;
    
        return $this;
    }

    /**
     * Get helmRaceRestriction
     *
     * @return string 
     */
    public function getHelmRaceRestriction()
    {
        return $this->helmRaceRestriction;
    }

    /**
     * Set helmRaceLanguage
     *
     * @param integer $helmRaceLanguage
     * @return HelmRace
     */
    public function setHelmRaceLanguage($helmRaceLanguage)
    {
        $this->helmRaceLanguage = $helmRaceLanguage;
    
        return $this;
    }

    /**
     * Get helmRaceLanguage
     *
     * @return integer 
     */
    public function getHelmRaceLanguage()
    {
        return $this->helmRaceLanguage;
    }

    /**
     * Set helmRaceType
     *
     * @param boolean $helmRaceType
     * @return HelmRace
     */
    public function setHelmRaceType($helmRaceType)
    {
        $this->helmRaceType = $helmRaceType;
    
        return $this;
    }

    /**
     * Get helmRaceType
     *
     * @return boolean 
     */
    public function getHelmRaceType()
    {
        return $this->helmRaceType;
    }

    /**
     * Set helmRaceBehavior
     *
     * @param boolean $helmRaceBehavior
     * @return HelmRace
     */
    public function setHelmRaceBehavior($helmRaceBehavior)
    {
        $this->helmRaceBehavior = $helmRaceBehavior;
    
        return $this;
    }

    /**
     * Get helmRaceBehavior
     *
     * @return boolean 
     */
    public function getHelmRaceBehavior()
    {
        return $this->helmRaceBehavior;
    }

    /**
     * Set helmRaceOrder
     *
     * @param boolean $helmRaceOrder
     * @return HelmRace
     */
    public function setHelmRaceOrder($helmRaceOrder)
    {
        $this->helmRaceOrder = $helmRaceOrder;
    
        return $this;
    }

    /**
     * Get helmRaceOrder
     *
     * @return boolean 
     */
    public function getHelmRaceOrder()
    {
        return $this->helmRaceOrder;
    }

    /**
     * Set helmRaceHistory
     *
     * @param string $helmRaceHistory
     * @return HelmRace
     */
    public function setHelmRaceHistory($helmRaceHistory)
    {
        $this->helmRaceHistory = $helmRaceHistory;
    
        return $this;
    }

    /**
     * Get helmRaceHistory
     *
     * @return string 
     */
    public function getHelmRaceHistory()
    {
        return $this->helmRaceHistory;
    }
}