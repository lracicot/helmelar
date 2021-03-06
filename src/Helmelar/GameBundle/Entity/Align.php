<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmAlign
 *
 * @ORM\Table(name="HELM_ALIGN")
 * @ORM\Entity
 */
class Align
{
    /**
     * @var integer $helmAlignId
     *
     * @ORM\Column(name="HELM_ALIGN_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmAlignId;

    /**
     * @var string $helmAlignName
     *
     * @ORM\Column(name="HELM_ALIGN_NAME", type="string", length=20, nullable=false)
     */
    private $helmAlignName;

    /**
     * @var boolean $helmBehaviorId
     *
     * @ORM\Column(name="HELM_BEHAVIOR_ID", type="boolean", nullable=false)
     */
    private $helmBehaviorId;

    /**
     * @var string $helmAlignDescription
     *
     * @ORM\Column(name="HELM_ALIGN_DESCRIPTION", type="text", nullable=true)
     */
    private $helmAlignDescription;

    /**
     * @var boolean $helmAlignOrder
     *
     * @ORM\Column(name="HELM_ALIGN_ORDER", type="boolean", nullable=false)
     */
    private $helmAlignOrder;



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
     * Set helmAlignName
     *
     * @param string $helmAlignName
     * @return HelmAlign
     */
    public function setHelmAlignName($helmAlignName)
    {
        $this->helmAlignName = $helmAlignName;
    
        return $this;
    }

    /**
     * Get helmAlignName
     *
     * @return string 
     */
    public function getHelmAlignName()
    {
        return $this->helmAlignName;
    }

    /**
     * Set helmBehaviorId
     *
     * @param boolean $helmBehaviorId
     * @return HelmAlign
     */
    public function setHelmBehaviorId($helmBehaviorId)
    {
        $this->helmBehaviorId = $helmBehaviorId;
    
        return $this;
    }

    /**
     * Get helmBehaviorId
     *
     * @return boolean 
     */
    public function getHelmBehaviorId()
    {
        return $this->helmBehaviorId;
    }

    /**
     * Set helmAlignDescription
     *
     * @param string $helmAlignDescription
     * @return HelmAlign
     */
    public function setHelmAlignDescription($helmAlignDescription)
    {
        $this->helmAlignDescription = $helmAlignDescription;
    
        return $this;
    }

    /**
     * Get helmAlignDescription
     *
     * @return string 
     */
    public function getHelmAlignDescription()
    {
        return $this->helmAlignDescription;
    }

    /**
     * Set helmAlignOrder
     *
     * @param boolean $helmAlignOrder
     * @return HelmAlign
     */
    public function setHelmAlignOrder($helmAlignOrder)
    {
        $this->helmAlignOrder = $helmAlignOrder;
    
        return $this;
    }

    /**
     * Get helmAlignOrder
     *
     * @return boolean 
     */
    public function getHelmAlignOrder()
    {
        return $this->helmAlignOrder;
    }
}