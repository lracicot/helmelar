<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmObjectType
 *
 * @ORM\Table(name="HELM_OBJECT_TYPE")
 * @ORM\Entity
 */
class ObjectType
{
    /**
     * @var boolean $helmObjectTypeId
     *
     * @ORM\Column(name="HELM_OBJECT_TYPE_ID", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmObjectTypeId;

    /**
     * @var string $helmObjectTypeName
     *
     * @ORM\Column(name="HELM_OBJECT_TYPE_NAME", type="string", length=255, nullable=false)
     */
    private $helmObjectTypeName;



    /**
     * Get helmObjectTypeId
     *
     * @return boolean 
     */
    public function getHelmObjectTypeId()
    {
        return $this->helmObjectTypeId;
    }

    /**
     * Set helmObjectTypeName
     *
     * @param string $helmObjectTypeName
     * @return HelmObjectType
     */
    public function setHelmObjectTypeName($helmObjectTypeName)
    {
        $this->helmObjectTypeName = $helmObjectTypeName;
    
        return $this;
    }

    /**
     * Get helmObjectTypeName
     *
     * @return string 
     */
    public function getHelmObjectTypeName()
    {
        return $this->helmObjectTypeName;
    }
}