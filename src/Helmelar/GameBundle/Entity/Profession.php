<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmProfession
 *
 * @ORM\Table(name="HELM_PROFESSION")
 * @ORM\Entity
 */
class Profession
{
    /**
     * @var integer $helmProfessionId
     *
     * @ORM\Column(name="HELM_PROFESSION_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmProfessionId;

    /**
     * @var string $helmProfessionName
     *
     * @ORM\Column(name="HELM_PROFESSION_NAME", type="string", length=50, nullable=false)
     */
    private $helmProfessionName;

    /**
     * @var string $helmProfessionDescription
     *
     * @ORM\Column(name="HELM_PROFESSION_DESCRIPTION", type="text", nullable=true)
     */
    private $helmProfessionDescription;

    /**
     * @var integer $helmProfessionLevelMinimum
     *
     * @ORM\Column(name="HELM_PROFESSION_LEVEL_MINIMUM", type="integer", nullable=false)
     */
    private $helmProfessionLevelMinimum;

    /**
     * @var string $helmProfessionRestriction
     *
     * @ORM\Column(name="HELM_PROFESSION_RESTRICTION", type="text", nullable=false)
     */
    private $helmProfessionRestriction;

    /**
     * @var string $helmProfessionBonus
     *
     * @ORM\Column(name="HELM_PROFESSION_BONUS", type="text", nullable=true)
     */
    private $helmProfessionBonus;

    /**
     * @var string $helmProfessionMalus
     *
     * @ORM\Column(name="HELM_PROFESSION_MALUS", type="text", nullable=true)
     */
    private $helmProfessionMalus;

    /**
     * @var boolean $helmProfessionType
     *
     * @ORM\Column(name="HELM_PROFESSION_TYPE", type="boolean", nullable=true)
     */
    private $helmProfessionType;

    /**
     * @var boolean $helmProfessionFamilyId
     *
     * @ORM\Column(name="HELM_PROFESSION_FAMILY_ID", type="boolean", nullable=true)
     */
    private $helmProfessionFamilyId;



    /**
     * Get helmProfessionId
     *
     * @return integer 
     */
    public function getHelmProfessionId()
    {
        return $this->helmProfessionId;
    }

    /**
     * Set helmProfessionName
     *
     * @param string $helmProfessionName
     * @return HelmProfession
     */
    public function setHelmProfessionName($helmProfessionName)
    {
        $this->helmProfessionName = $helmProfessionName;
    
        return $this;
    }

    /**
     * Get helmProfessionName
     *
     * @return string 
     */
    public function getHelmProfessionName()
    {
        return $this->helmProfessionName;
    }

    /**
     * Set helmProfessionDescription
     *
     * @param string $helmProfessionDescription
     * @return HelmProfession
     */
    public function setHelmProfessionDescription($helmProfessionDescription)
    {
        $this->helmProfessionDescription = $helmProfessionDescription;
    
        return $this;
    }

    /**
     * Get helmProfessionDescription
     *
     * @return string 
     */
    public function getHelmProfessionDescription()
    {
        return $this->helmProfessionDescription;
    }

    /**
     * Set helmProfessionLevelMinimum
     *
     * @param integer $helmProfessionLevelMinimum
     * @return HelmProfession
     */
    public function setHelmProfessionLevelMinimum($helmProfessionLevelMinimum)
    {
        $this->helmProfessionLevelMinimum = $helmProfessionLevelMinimum;
    
        return $this;
    }

    /**
     * Get helmProfessionLevelMinimum
     *
     * @return integer 
     */
    public function getHelmProfessionLevelMinimum()
    {
        return $this->helmProfessionLevelMinimum;
    }

    /**
     * Set helmProfessionRestriction
     *
     * @param string $helmProfessionRestriction
     * @return HelmProfession
     */
    public function setHelmProfessionRestriction($helmProfessionRestriction)
    {
        $this->helmProfessionRestriction = $helmProfessionRestriction;
    
        return $this;
    }

    /**
     * Get helmProfessionRestriction
     *
     * @return string 
     */
    public function getHelmProfessionRestriction()
    {
        return $this->helmProfessionRestriction;
    }

    /**
     * Set helmProfessionBonus
     *
     * @param string $helmProfessionBonus
     * @return HelmProfession
     */
    public function setHelmProfessionBonus($helmProfessionBonus)
    {
        $this->helmProfessionBonus = $helmProfessionBonus;
    
        return $this;
    }

    /**
     * Get helmProfessionBonus
     *
     * @return string 
     */
    public function getHelmProfessionBonus()
    {
        return $this->helmProfessionBonus;
    }

    /**
     * Set helmProfessionMalus
     *
     * @param string $helmProfessionMalus
     * @return HelmProfession
     */
    public function setHelmProfessionMalus($helmProfessionMalus)
    {
        $this->helmProfessionMalus = $helmProfessionMalus;
    
        return $this;
    }

    /**
     * Get helmProfessionMalus
     *
     * @return string 
     */
    public function getHelmProfessionMalus()
    {
        return $this->helmProfessionMalus;
    }

    /**
     * Set helmProfessionType
     *
     * @param boolean $helmProfessionType
     * @return HelmProfession
     */
    public function setHelmProfessionType($helmProfessionType)
    {
        $this->helmProfessionType = $helmProfessionType;
    
        return $this;
    }

    /**
     * Get helmProfessionType
     *
     * @return boolean 
     */
    public function getHelmProfessionType()
    {
        return $this->helmProfessionType;
    }

    /**
     * Set helmProfessionFamilyId
     *
     * @param boolean $helmProfessionFamilyId
     * @return HelmProfession
     */
    public function setHelmProfessionFamilyId($helmProfessionFamilyId)
    {
        $this->helmProfessionFamilyId = $helmProfessionFamilyId;
    
        return $this;
    }

    /**
     * Get helmProfessionFamilyId
     *
     * @return boolean 
     */
    public function getHelmProfessionFamilyId()
    {
        return $this->helmProfessionFamilyId;
    }
}