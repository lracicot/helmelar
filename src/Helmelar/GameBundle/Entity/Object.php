<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmObject
 *
 * @ORM\Table(name="HELM_OBJECT")
 * @ORM\Entity
 */
class Object
{
    /**
     * @var integer $helmObjectId
     *
     * @ORM\Column(name="HELM_OBJECT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmObjectId;

    /**
     * @var string $helmObjectName
     *
     * @ORM\Column(name="HELM_OBJECT_NAME", type="string", length=200, nullable=false)
     */
    private $helmObjectName;

    /**
     * @var integer $helmObjectNumber
     *
     * @ORM\Column(name="HELM_OBJECT_NUMBER", type="integer", nullable=false)
     */
    private $helmObjectNumber;

    /**
     * @var boolean $helmObjectStatus
     *
     * @ORM\Column(name="HELM_OBJECT_STATUS", type="boolean", nullable=false)
     */
    private $helmObjectStatus;

    /**
     * @var boolean $helmObjectType
     *
     * @ORM\Column(name="HELM_OBJECT_TYPE", type="boolean", nullable=true)
     */
    private $helmObjectType;

    /**
     * @var integer $helmObjectCatId
     *
     * @ORM\Column(name="HELM_OBJECT_CAT_ID", type="integer", nullable=false)
     */
    private $helmObjectCatId;

    /**
     * @var integer $helmObjectSubcatId
     *
     * @ORM\Column(name="HELM_OBJECT_SUBCAT_ID", type="integer", nullable=false)
     */
    private $helmObjectSubcatId;

    /**
     * @var boolean $helmObjectIdLvl
     *
     * @ORM\Column(name="HELM_OBJECT_ID_LVL", type="boolean", nullable=false)
     */
    private $helmObjectIdLvl;

    /**
     * @var boolean $helmObjectControlLvl
     *
     * @ORM\Column(name="HELM_OBJECT_CONTROL_LVL", type="boolean", nullable=false)
     */
    private $helmObjectControlLvl;

    /**
     * @var string $helmObjectDescription
     *
     * @ORM\Column(name="HELM_OBJECT_DESCRIPTION", type="text", nullable=true)
     */
    private $helmObjectDescription;

    /**
     * @var string $helmObjectDescriptionEffectControl
     *
     * @ORM\Column(name="HELM_OBJECT_DESCRIPTION_EFFECT_CONTROL", type="text", nullable=false)
     */
    private $helmObjectDescriptionEffectControl;

    /**
     * @var string $helmObjectDescriptionEffectNoControl
     *
     * @ORM\Column(name="HELM_OBJECT_DESCRIPTION_EFFECT_NO_CONTROL", type="text", nullable=false)
     */
    private $helmObjectDescriptionEffectNoControl;

    /**
     * @var string $helmObjectHistory
     *
     * @ORM\Column(name="HELM_OBJECT_HISTORY", type="text", nullable=false)
     */
    private $helmObjectHistory;

    /**
     * @var string $helmObjectSpecial
     *
     * @ORM\Column(name="HELM_OBJECT_SPECIAL", type="text", nullable=false)
     */
    private $helmObjectSpecial;

    /**
     * @var integer $charactId
     *
     * @ORM\Column(name="CHARACT_ID", type="integer", nullable=false)
     */
    private $charactId;

    /**
     * @var string $helmObjectNote
     *
     * @ORM\Column(name="HELM_OBJECT_NOTE", type="text", nullable=false)
     */
    private $helmObjectNote;



    /**
     * Get helmObjectId
     *
     * @return integer 
     */
    public function getHelmObjectId()
    {
        return $this->helmObjectId;
    }

    /**
     * Set helmObjectName
     *
     * @param string $helmObjectName
     * @return HelmObject
     */
    public function setHelmObjectName($helmObjectName)
    {
        $this->helmObjectName = $helmObjectName;
    
        return $this;
    }

    /**
     * Get helmObjectName
     *
     * @return string 
     */
    public function getHelmObjectName()
    {
        return $this->helmObjectName;
    }

    /**
     * Set helmObjectNumber
     *
     * @param integer $helmObjectNumber
     * @return HelmObject
     */
    public function setHelmObjectNumber($helmObjectNumber)
    {
        $this->helmObjectNumber = $helmObjectNumber;
    
        return $this;
    }

    /**
     * Get helmObjectNumber
     *
     * @return integer 
     */
    public function getHelmObjectNumber()
    {
        return $this->helmObjectNumber;
    }

    /**
     * Set helmObjectStatus
     *
     * @param boolean $helmObjectStatus
     * @return HelmObject
     */
    public function setHelmObjectStatus($helmObjectStatus)
    {
        $this->helmObjectStatus = $helmObjectStatus;
    
        return $this;
    }

    /**
     * Get helmObjectStatus
     *
     * @return boolean 
     */
    public function getHelmObjectStatus()
    {
        return $this->helmObjectStatus;
    }

    /**
     * Set helmObjectType
     *
     * @param boolean $helmObjectType
     * @return HelmObject
     */
    public function setHelmObjectType($helmObjectType)
    {
        $this->helmObjectType = $helmObjectType;
    
        return $this;
    }

    /**
     * Get helmObjectType
     *
     * @return boolean 
     */
    public function getHelmObjectType()
    {
        return $this->helmObjectType;
    }

    /**
     * Set helmObjectCatId
     *
     * @param integer $helmObjectCatId
     * @return HelmObject
     */
    public function setHelmObjectCatId($helmObjectCatId)
    {
        $this->helmObjectCatId = $helmObjectCatId;
    
        return $this;
    }

    /**
     * Get helmObjectCatId
     *
     * @return integer 
     */
    public function getHelmObjectCatId()
    {
        return $this->helmObjectCatId;
    }

    /**
     * Set helmObjectSubcatId
     *
     * @param integer $helmObjectSubcatId
     * @return HelmObject
     */
    public function setHelmObjectSubcatId($helmObjectSubcatId)
    {
        $this->helmObjectSubcatId = $helmObjectSubcatId;
    
        return $this;
    }

    /**
     * Get helmObjectSubcatId
     *
     * @return integer 
     */
    public function getHelmObjectSubcatId()
    {
        return $this->helmObjectSubcatId;
    }

    /**
     * Set helmObjectIdLvl
     *
     * @param boolean $helmObjectIdLvl
     * @return HelmObject
     */
    public function setHelmObjectIdLvl($helmObjectIdLvl)
    {
        $this->helmObjectIdLvl = $helmObjectIdLvl;
    
        return $this;
    }

    /**
     * Get helmObjectIdLvl
     *
     * @return boolean 
     */
    public function getHelmObjectIdLvl()
    {
        return $this->helmObjectIdLvl;
    }

    /**
     * Set helmObjectControlLvl
     *
     * @param boolean $helmObjectControlLvl
     * @return HelmObject
     */
    public function setHelmObjectControlLvl($helmObjectControlLvl)
    {
        $this->helmObjectControlLvl = $helmObjectControlLvl;
    
        return $this;
    }

    /**
     * Get helmObjectControlLvl
     *
     * @return boolean 
     */
    public function getHelmObjectControlLvl()
    {
        return $this->helmObjectControlLvl;
    }

    /**
     * Set helmObjectDescription
     *
     * @param string $helmObjectDescription
     * @return HelmObject
     */
    public function setHelmObjectDescription($helmObjectDescription)
    {
        $this->helmObjectDescription = $helmObjectDescription;
    
        return $this;
    }

    /**
     * Get helmObjectDescription
     *
     * @return string 
     */
    public function getHelmObjectDescription()
    {
        return $this->helmObjectDescription;
    }

    /**
     * Set helmObjectDescriptionEffectControl
     *
     * @param string $helmObjectDescriptionEffectControl
     * @return HelmObject
     */
    public function setHelmObjectDescriptionEffectControl($helmObjectDescriptionEffectControl)
    {
        $this->helmObjectDescriptionEffectControl = $helmObjectDescriptionEffectControl;
    
        return $this;
    }

    /**
     * Get helmObjectDescriptionEffectControl
     *
     * @return string 
     */
    public function getHelmObjectDescriptionEffectControl()
    {
        return $this->helmObjectDescriptionEffectControl;
    }

    /**
     * Set helmObjectDescriptionEffectNoControl
     *
     * @param string $helmObjectDescriptionEffectNoControl
     * @return HelmObject
     */
    public function setHelmObjectDescriptionEffectNoControl($helmObjectDescriptionEffectNoControl)
    {
        $this->helmObjectDescriptionEffectNoControl = $helmObjectDescriptionEffectNoControl;
    
        return $this;
    }

    /**
     * Get helmObjectDescriptionEffectNoControl
     *
     * @return string 
     */
    public function getHelmObjectDescriptionEffectNoControl()
    {
        return $this->helmObjectDescriptionEffectNoControl;
    }

    /**
     * Set helmObjectHistory
     *
     * @param string $helmObjectHistory
     * @return HelmObject
     */
    public function setHelmObjectHistory($helmObjectHistory)
    {
        $this->helmObjectHistory = $helmObjectHistory;
    
        return $this;
    }

    /**
     * Get helmObjectHistory
     *
     * @return string 
     */
    public function getHelmObjectHistory()
    {
        return $this->helmObjectHistory;
    }

    /**
     * Set helmObjectSpecial
     *
     * @param string $helmObjectSpecial
     * @return HelmObject
     */
    public function setHelmObjectSpecial($helmObjectSpecial)
    {
        $this->helmObjectSpecial = $helmObjectSpecial;
    
        return $this;
    }

    /**
     * Get helmObjectSpecial
     *
     * @return string 
     */
    public function getHelmObjectSpecial()
    {
        return $this->helmObjectSpecial;
    }

    /**
     * Set charactId
     *
     * @param integer $charactId
     * @return HelmObject
     */
    public function setCharactId($charactId)
    {
        $this->charactId = $charactId;
    
        return $this;
    }

    /**
     * Get charactId
     *
     * @return integer 
     */
    public function getCharactId()
    {
        return $this->charactId;
    }

    /**
     * Set helmObjectNote
     *
     * @param string $helmObjectNote
     * @return HelmObject
     */
    public function setHelmObjectNote($helmObjectNote)
    {
        $this->helmObjectNote = $helmObjectNote;
    
        return $this;
    }

    /**
     * Get helmObjectNote
     *
     * @return string 
     */
    public function getHelmObjectNote()
    {
        return $this->helmObjectNote;
    }
}