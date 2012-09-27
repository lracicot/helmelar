<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmKnowledgeExt
 *
 * @ORM\Table(name="HELM_KNOWLEDGE_EXT")
 * @ORM\Entity
 */
class KnowledgeExt
{
    /**
     * @var integer $helmKnowledgeExtId
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_EXT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmKnowledgeExtId;

    /**
     * @var integer $helmKnowledgeId
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_ID", type="integer", nullable=false)
     */
    private $helmKnowledgeId;

    /**
     * @var boolean $helmKnowledgeExtLvl
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_EXT_LVL", type="boolean", nullable=false)
     */
    private $helmKnowledgeExtLvl;

    /**
     * @var string $helmKnowledgeExtDescription
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_EXT_DESCRIPTION", type="text", nullable=false)
     */
    private $helmKnowledgeExtDescription;



    /**
     * Get helmKnowledgeExtId
     *
     * @return integer 
     */
    public function getHelmKnowledgeExtId()
    {
        return $this->helmKnowledgeExtId;
    }

    /**
     * Set helmKnowledgeId
     *
     * @param integer $helmKnowledgeId
     * @return HelmKnowledgeExt
     */
    public function setHelmKnowledgeId($helmKnowledgeId)
    {
        $this->helmKnowledgeId = $helmKnowledgeId;
    
        return $this;
    }

    /**
     * Get helmKnowledgeId
     *
     * @return integer 
     */
    public function getHelmKnowledgeId()
    {
        return $this->helmKnowledgeId;
    }

    /**
     * Set helmKnowledgeExtLvl
     *
     * @param boolean $helmKnowledgeExtLvl
     * @return HelmKnowledgeExt
     */
    public function setHelmKnowledgeExtLvl($helmKnowledgeExtLvl)
    {
        $this->helmKnowledgeExtLvl = $helmKnowledgeExtLvl;
    
        return $this;
    }

    /**
     * Get helmKnowledgeExtLvl
     *
     * @return boolean 
     */
    public function getHelmKnowledgeExtLvl()
    {
        return $this->helmKnowledgeExtLvl;
    }

    /**
     * Set helmKnowledgeExtDescription
     *
     * @param string $helmKnowledgeExtDescription
     * @return HelmKnowledgeExt
     */
    public function setHelmKnowledgeExtDescription($helmKnowledgeExtDescription)
    {
        $this->helmKnowledgeExtDescription = $helmKnowledgeExtDescription;
    
        return $this;
    }

    /**
     * Get helmKnowledgeExtDescription
     *
     * @return string 
     */
    public function getHelmKnowledgeExtDescription()
    {
        return $this->helmKnowledgeExtDescription;
    }
}