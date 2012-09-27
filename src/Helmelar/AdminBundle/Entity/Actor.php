<?php

namespace Helmelar\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\AdminBundle\Entity\Actor
 *
 * @ORM\Table(name="ACTOR")
 * @ORM\Entity
 */
class Actor
{
    /**
     * @var integer $actorId
     *
     * @ORM\Column(name="ACTOR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actorId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer $organisatorRefId
     *
     * @ORM\Column(name="ORGANISATOR_REF_ID", type="integer", nullable=false)
     */
    private $organisatorRefId;

    /**
     * @var string $actorTitle
     *
     * @ORM\Column(name="ACTOR_TITLE", type="string", length=55, nullable=false)
     */
    private $actorTitle;

    /**
     * @var \DateTime $actorDate
     *
     * @ORM\Column(name="ACTOR_DATE", type="datetime", nullable=false)
     */
    private $actorDate;



    /**
     * Get actorId
     *
     * @return integer 
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Actor
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set organisatorRefId
     *
     * @param integer $organisatorRefId
     * @return Actor
     */
    public function setOrganisatorRefId($organisatorRefId)
    {
        $this->organisatorRefId = $organisatorRefId;
    
        return $this;
    }

    /**
     * Get organisatorRefId
     *
     * @return integer 
     */
    public function getOrganisatorRefId()
    {
        return $this->organisatorRefId;
    }

    /**
     * Set actorTitle
     *
     * @param string $actorTitle
     * @return Actor
     */
    public function setActorTitle($actorTitle)
    {
        $this->actorTitle = $actorTitle;
    
        return $this;
    }

    /**
     * Get actorTitle
     *
     * @return string 
     */
    public function getActorTitle()
    {
        return $this->actorTitle;
    }

    /**
     * Set actorDate
     *
     * @param \DateTime $actorDate
     * @return Actor
     */
    public function setActorDate($actorDate)
    {
        $this->actorDate = $actorDate;
    
        return $this;
    }

    /**
     * Get actorDate
     *
     * @return \DateTime 
     */
    public function getActorDate()
    {
        return $this->actorDate;
    }
}