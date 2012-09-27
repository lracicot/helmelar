<?php

namespace Helmelar\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\AdminBundle\Entity\QuestIdea
 *
 * @ORM\Table(name="QUEST_IDEA")
 * @ORM\Entity
 */
class QuestIdea
{
    /**
     * @var integer $questIdeaId
     *
     * @ORM\Column(name="QUEST_IDEA_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questIdeaId;

    /**
     * @var string $questIdeaTitle
     *
     * @ORM\Column(name="QUEST_IDEA_TITLE", type="string", length=255, nullable=false)
     */
    private $questIdeaTitle;

    /**
     * @var string $questIdeaDescription
     *
     * @ORM\Column(name="QUEST_IDEA_DESCRIPTION", type="text", nullable=false)
     */
    private $questIdeaDescription;

    /**
     * @var integer $userIdWriter
     *
     * @ORM\Column(name="USER_ID_WRITER", type="integer", nullable=false)
     */
    private $userIdWriter;

    /**
     * @var string $questIdeaTarget
     *
     * @ORM\Column(name="QUEST_IDEA_TARGET", type="string", length=255, nullable=false)
     */
    private $questIdeaTarget;

    /**
     * @var integer $questIdeaStatus
     *
     * @ORM\Column(name="QUEST_IDEA_STATUS", type="integer", nullable=false)
     */
    private $questIdeaStatus;



    /**
     * Get questIdeaId
     *
     * @return integer 
     */
    public function getQuestIdeaId()
    {
        return $this->questIdeaId;
    }

    /**
     * Set questIdeaTitle
     *
     * @param string $questIdeaTitle
     * @return QuestIdea
     */
    public function setQuestIdeaTitle($questIdeaTitle)
    {
        $this->questIdeaTitle = $questIdeaTitle;
    
        return $this;
    }

    /**
     * Get questIdeaTitle
     *
     * @return string 
     */
    public function getQuestIdeaTitle()
    {
        return $this->questIdeaTitle;
    }

    /**
     * Set questIdeaDescription
     *
     * @param string $questIdeaDescription
     * @return QuestIdea
     */
    public function setQuestIdeaDescription($questIdeaDescription)
    {
        $this->questIdeaDescription = $questIdeaDescription;
    
        return $this;
    }

    /**
     * Get questIdeaDescription
     *
     * @return string 
     */
    public function getQuestIdeaDescription()
    {
        return $this->questIdeaDescription;
    }

    /**
     * Set userIdWriter
     *
     * @param integer $userIdWriter
     * @return QuestIdea
     */
    public function setUserIdWriter($userIdWriter)
    {
        $this->userIdWriter = $userIdWriter;
    
        return $this;
    }

    /**
     * Get userIdWriter
     *
     * @return integer 
     */
    public function getUserIdWriter()
    {
        return $this->userIdWriter;
    }

    /**
     * Set questIdeaTarget
     *
     * @param string $questIdeaTarget
     * @return QuestIdea
     */
    public function setQuestIdeaTarget($questIdeaTarget)
    {
        $this->questIdeaTarget = $questIdeaTarget;
    
        return $this;
    }

    /**
     * Get questIdeaTarget
     *
     * @return string 
     */
    public function getQuestIdeaTarget()
    {
        return $this->questIdeaTarget;
    }

    /**
     * Set questIdeaStatus
     *
     * @param integer $questIdeaStatus
     * @return QuestIdea
     */
    public function setQuestIdeaStatus($questIdeaStatus)
    {
        $this->questIdeaStatus = $questIdeaStatus;
    
        return $this;
    }

    /**
     * Get questIdeaStatus
     *
     * @return integer 
     */
    public function getQuestIdeaStatus()
    {
        return $this->questIdeaStatus;
    }
}