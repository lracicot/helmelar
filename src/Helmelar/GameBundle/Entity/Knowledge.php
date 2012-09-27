<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmKnowledge
 *
 * @ORM\Table(name="HELM_KNOWLEDGE")
 * @ORM\Entity
 */
class Knowledge
{
    /**
     * @var integer $helmKnowledgeId
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmKnowledgeId;

    /**
     * @var string $helmKnowledgeName
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_NAME", type="string", length=255, nullable=false)
     */
    private $helmKnowledgeName;

    /**
     * @var boolean $helmKnowledgeType
     *
     * @ORM\Column(name="HELM_KNOWLEDGE_TYPE", type="boolean", nullable=false)
     */
    private $helmKnowledgeType;



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
     * Set helmKnowledgeName
     *
     * @param string $helmKnowledgeName
     * @return HelmKnowledge
     */
    public function setHelmKnowledgeName($helmKnowledgeName)
    {
        $this->helmKnowledgeName = $helmKnowledgeName;
    
        return $this;
    }

    /**
     * Get helmKnowledgeName
     *
     * @return string 
     */
    public function getHelmKnowledgeName()
    {
        return $this->helmKnowledgeName;
    }

    /**
     * Set helmKnowledgeType
     *
     * @param boolean $helmKnowledgeType
     * @return HelmKnowledge
     */
    public function setHelmKnowledgeType($helmKnowledgeType)
    {
        $this->helmKnowledgeType = $helmKnowledgeType;
    
        return $this;
    }

    /**
     * Get helmKnowledgeType
     *
     * @return boolean 
     */
    public function getHelmKnowledgeType()
    {
        return $this->helmKnowledgeType;
    }
}