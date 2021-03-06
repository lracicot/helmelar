<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmGod
 *
 * @ORM\Table(name="HELM_GOD")
 * @ORM\Entity
 */
class God
{
    /**
     * @var integer $helmGodId
     *
     * @ORM\Column(name="HELM_GOD_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmGodId;

    /**
     * @var boolean $helmGodType
     *
     * @ORM\Column(name="HELM_GOD_TYPE", type="boolean", nullable=false)
     */
    private $helmGodType;

    /**
     * @var string $helmGodName
     *
     * @ORM\Column(name="HELM_GOD_NAME", type="string", length=20, nullable=false)
     */
    private $helmGodName;

    /**
     * @var string $helmGodTitle
     *
     * @ORM\Column(name="HELM_GOD_TITLE", type="string", length=255, nullable=false)
     */
    private $helmGodTitle;

    /**
     * @var integer $helmGodMotherId
     *
     * @ORM\Column(name="HELM_GOD_MOTHER_ID", type="integer", nullable=false)
     */
    private $helmGodMotherId;

    /**
     * @var integer $helmGodFatherId
     *
     * @ORM\Column(name="HELM_GOD_FATHER_ID", type="integer", nullable=false)
     */
    private $helmGodFatherId;

    /**
     * @var integer $helmGodEnnemyId
     *
     * @ORM\Column(name="HELM_GOD_ENNEMY_ID", type="integer", nullable=false)
     */
    private $helmGodEnnemyId;

    /**
     * @var integer $helmAlignId
     *
     * @ORM\Column(name="HELM_ALIGN_ID", type="integer", nullable=false)
     */
    private $helmAlignId;

    /**
     * @var string $helmGodWeapon
     *
     * @ORM\Column(name="HELM_GOD_WEAPON", type="string", length=255, nullable=false)
     */
    private $helmGodWeapon;

    /**
     * @var string $helmGodCharacteristic
     *
     * @ORM\Column(name="HELM_GOD_CHARACTERISTIC", type="text", nullable=false)
     */
    private $helmGodCharacteristic;

    /**
     * @var string $helmGodShortDescription
     *
     * @ORM\Column(name="HELM_GOD_SHORT_DESCRIPTION", type="text", nullable=true)
     */
    private $helmGodShortDescription;

    /**
     * @var string $helmGodDescription
     *
     * @ORM\Column(name="HELM_GOD_DESCRIPTION", type="text", nullable=false)
     */
    private $helmGodDescription;

    /**
     * @var string $helmGodSymbol
     *
     * @ORM\Column(name="HELM_GOD_SYMBOL", type="text", nullable=false)
     */
    private $helmGodSymbol;

    /**
     * @var string $helmGodSymbolImage
     *
     * @ORM\Column(name="HELM_GOD_SYMBOL_IMAGE", type="string", length=255, nullable=false)
     */
    private $helmGodSymbolImage;

    /**
     * @var string $helmGodHistory
     *
     * @ORM\Column(name="HELM_GOD_HISTORY", type="text", nullable=false)
     */
    private $helmGodHistory;

    /**
     * @var string $helmGodMentality
     *
     * @ORM\Column(name="HELM_GOD_MENTALITY", type="text", nullable=false)
     */
    private $helmGodMentality;

    /**
     * @var string $helmGodCeremony
     *
     * @ORM\Column(name="HELM_GOD_CEREMONY", type="text", nullable=false)
     */
    private $helmGodCeremony;

    /**
     * @var string $helmGodWedding
     *
     * @ORM\Column(name="HELM_GOD_WEDDING", type="text", nullable=false)
     */
    private $helmGodWedding;

    /**
     * @var string $helmGodImage
     *
     * @ORM\Column(name="HELM_GOD_IMAGE", type="string", length=255, nullable=false)
     */
    private $helmGodImage;



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
     * Set helmGodType
     *
     * @param boolean $helmGodType
     * @return HelmGod
     */
    public function setHelmGodType($helmGodType)
    {
        $this->helmGodType = $helmGodType;
    
        return $this;
    }

    /**
     * Get helmGodType
     *
     * @return boolean 
     */
    public function getHelmGodType()
    {
        return $this->helmGodType;
    }

    /**
     * Set helmGodName
     *
     * @param string $helmGodName
     * @return HelmGod
     */
    public function setHelmGodName($helmGodName)
    {
        $this->helmGodName = $helmGodName;
    
        return $this;
    }

    /**
     * Get helmGodName
     *
     * @return string 
     */
    public function getHelmGodName()
    {
        return $this->helmGodName;
    }

    /**
     * Set helmGodTitle
     *
     * @param string $helmGodTitle
     * @return HelmGod
     */
    public function setHelmGodTitle($helmGodTitle)
    {
        $this->helmGodTitle = $helmGodTitle;
    
        return $this;
    }

    /**
     * Get helmGodTitle
     *
     * @return string 
     */
    public function getHelmGodTitle()
    {
        return $this->helmGodTitle;
    }

    /**
     * Set helmGodMotherId
     *
     * @param integer $helmGodMotherId
     * @return HelmGod
     */
    public function setHelmGodMotherId($helmGodMotherId)
    {
        $this->helmGodMotherId = $helmGodMotherId;
    
        return $this;
    }

    /**
     * Get helmGodMotherId
     *
     * @return integer 
     */
    public function getHelmGodMotherId()
    {
        return $this->helmGodMotherId;
    }

    /**
     * Set helmGodFatherId
     *
     * @param integer $helmGodFatherId
     * @return HelmGod
     */
    public function setHelmGodFatherId($helmGodFatherId)
    {
        $this->helmGodFatherId = $helmGodFatherId;
    
        return $this;
    }

    /**
     * Get helmGodFatherId
     *
     * @return integer 
     */
    public function getHelmGodFatherId()
    {
        return $this->helmGodFatherId;
    }

    /**
     * Set helmGodEnnemyId
     *
     * @param integer $helmGodEnnemyId
     * @return HelmGod
     */
    public function setHelmGodEnnemyId($helmGodEnnemyId)
    {
        $this->helmGodEnnemyId = $helmGodEnnemyId;
    
        return $this;
    }

    /**
     * Get helmGodEnnemyId
     *
     * @return integer 
     */
    public function getHelmGodEnnemyId()
    {
        return $this->helmGodEnnemyId;
    }

    /**
     * Set helmAlignId
     *
     * @param integer $helmAlignId
     * @return HelmGod
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
     * Set helmGodWeapon
     *
     * @param string $helmGodWeapon
     * @return HelmGod
     */
    public function setHelmGodWeapon($helmGodWeapon)
    {
        $this->helmGodWeapon = $helmGodWeapon;
    
        return $this;
    }

    /**
     * Get helmGodWeapon
     *
     * @return string 
     */
    public function getHelmGodWeapon()
    {
        return $this->helmGodWeapon;
    }

    /**
     * Set helmGodCharacteristic
     *
     * @param string $helmGodCharacteristic
     * @return HelmGod
     */
    public function setHelmGodCharacteristic($helmGodCharacteristic)
    {
        $this->helmGodCharacteristic = $helmGodCharacteristic;
    
        return $this;
    }

    /**
     * Get helmGodCharacteristic
     *
     * @return string 
     */
    public function getHelmGodCharacteristic()
    {
        return $this->helmGodCharacteristic;
    }

    /**
     * Set helmGodShortDescription
     *
     * @param string $helmGodShortDescription
     * @return HelmGod
     */
    public function setHelmGodShortDescription($helmGodShortDescription)
    {
        $this->helmGodShortDescription = $helmGodShortDescription;
    
        return $this;
    }

    /**
     * Get helmGodShortDescription
     *
     * @return string 
     */
    public function getHelmGodShortDescription()
    {
        return $this->helmGodShortDescription;
    }

    /**
     * Set helmGodDescription
     *
     * @param string $helmGodDescription
     * @return HelmGod
     */
    public function setHelmGodDescription($helmGodDescription)
    {
        $this->helmGodDescription = $helmGodDescription;
    
        return $this;
    }

    /**
     * Get helmGodDescription
     *
     * @return string 
     */
    public function getHelmGodDescription()
    {
        return $this->helmGodDescription;
    }

    /**
     * Set helmGodSymbol
     *
     * @param string $helmGodSymbol
     * @return HelmGod
     */
    public function setHelmGodSymbol($helmGodSymbol)
    {
        $this->helmGodSymbol = $helmGodSymbol;
    
        return $this;
    }

    /**
     * Get helmGodSymbol
     *
     * @return string 
     */
    public function getHelmGodSymbol()
    {
        return $this->helmGodSymbol;
    }

    /**
     * Set helmGodSymbolImage
     *
     * @param string $helmGodSymbolImage
     * @return HelmGod
     */
    public function setHelmGodSymbolImage($helmGodSymbolImage)
    {
        $this->helmGodSymbolImage = $helmGodSymbolImage;
    
        return $this;
    }

    /**
     * Get helmGodSymbolImage
     *
     * @return string 
     */
    public function getHelmGodSymbolImage()
    {
        return $this->helmGodSymbolImage;
    }

    /**
     * Set helmGodHistory
     *
     * @param string $helmGodHistory
     * @return HelmGod
     */
    public function setHelmGodHistory($helmGodHistory)
    {
        $this->helmGodHistory = $helmGodHistory;
    
        return $this;
    }

    /**
     * Get helmGodHistory
     *
     * @return string 
     */
    public function getHelmGodHistory()
    {
        return $this->helmGodHistory;
    }

    /**
     * Set helmGodMentality
     *
     * @param string $helmGodMentality
     * @return HelmGod
     */
    public function setHelmGodMentality($helmGodMentality)
    {
        $this->helmGodMentality = $helmGodMentality;
    
        return $this;
    }

    /**
     * Get helmGodMentality
     *
     * @return string 
     */
    public function getHelmGodMentality()
    {
        return $this->helmGodMentality;
    }

    /**
     * Set helmGodCeremony
     *
     * @param string $helmGodCeremony
     * @return HelmGod
     */
    public function setHelmGodCeremony($helmGodCeremony)
    {
        $this->helmGodCeremony = $helmGodCeremony;
    
        return $this;
    }

    /**
     * Get helmGodCeremony
     *
     * @return string 
     */
    public function getHelmGodCeremony()
    {
        return $this->helmGodCeremony;
    }

    /**
     * Set helmGodWedding
     *
     * @param string $helmGodWedding
     * @return HelmGod
     */
    public function setHelmGodWedding($helmGodWedding)
    {
        $this->helmGodWedding = $helmGodWedding;
    
        return $this;
    }

    /**
     * Get helmGodWedding
     *
     * @return string 
     */
    public function getHelmGodWedding()
    {
        return $this->helmGodWedding;
    }

    /**
     * Set helmGodImage
     *
     * @param string $helmGodImage
     * @return HelmGod
     */
    public function setHelmGodImage($helmGodImage)
    {
        $this->helmGodImage = $helmGodImage;
    
        return $this;
    }

    /**
     * Get helmGodImage
     *
     * @return string 
     */
    public function getHelmGodImage()
    {
        return $this->helmGodImage;
    }
}