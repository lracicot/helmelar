<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmBehavior
 *
 * @ORM\Table(name="HELM_BEHAVIOR")
 * @ORM\Entity
 */
class Behavior
{
    /**
     * @var boolean $helmBehaviorId
     *
     * @ORM\Column(name="HELM_BEHAVIOR_ID", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmBehaviorId;

    /**
     * @var string $helmBehaviorName
     *
     * @ORM\Column(name="HELM_BEHAVIOR_NAME", type="string", length=55, nullable=false)
     */
    private $helmBehaviorName;



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
     * Set helmBehaviorName
     *
     * @param string $helmBehaviorName
     * @return HelmBehavior
     */
    public function setHelmBehaviorName($helmBehaviorName)
    {
        $this->helmBehaviorName = $helmBehaviorName;
    
        return $this;
    }

    /**
     * Get helmBehaviorName
     *
     * @return string 
     */
    public function getHelmBehaviorName()
    {
        return $this->helmBehaviorName;
    }
}