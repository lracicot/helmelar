<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmObjectCat
 *
 * @ORM\Table(name="HELM_OBJECT_CAT")
 * @ORM\Entity
 */
class ObjectCat
{
    /**
     * @var integer $helmObjectCatId
     *
     * @ORM\Column(name="HELM_OBJECT_CAT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmObjectCatId;

    /**
     * @var string $helmObjectCatName
     *
     * @ORM\Column(name="HELM_OBJECT_CAT_NAME", type="string", length=255, nullable=false)
     */
    private $helmObjectCatName;

    /**
     * @var integer $helmObjectCatRefId
     *
     * @ORM\Column(name="HELM_OBJECT_CAT_REF_ID", type="integer", nullable=false)
     */
    private $helmObjectCatRefId;



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
     * Set helmObjectCatName
     *
     * @param string $helmObjectCatName
     * @return HelmObjectCat
     */
    public function setHelmObjectCatName($helmObjectCatName)
    {
        $this->helmObjectCatName = $helmObjectCatName;
    
        return $this;
    }

    /**
     * Get helmObjectCatName
     *
     * @return string 
     */
    public function getHelmObjectCatName()
    {
        return $this->helmObjectCatName;
    }

    /**
     * Set helmObjectCatRefId
     *
     * @param integer $helmObjectCatRefId
     * @return HelmObjectCat
     */
    public function setHelmObjectCatRefId($helmObjectCatRefId)
    {
        $this->helmObjectCatRefId = $helmObjectCatRefId;
    
        return $this;
    }

    /**
     * Get helmObjectCatRefId
     *
     * @return integer 
     */
    public function getHelmObjectCatRefId()
    {
        return $this->helmObjectCatRefId;
    }
}