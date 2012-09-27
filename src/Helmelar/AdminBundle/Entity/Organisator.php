<?php

namespace Helmelar\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\AdminBundle\Entity\Organisator
 *
 * @ORM\Table(name="ORGANISATOR")
 * @ORM\Entity
 */
class Organisator
{
    /**
     * @var integer $organisatorId
     *
     * @ORM\Column(name="ORGANISATOR_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $organisatorId;

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
     * @var string $organisatorTitle
     *
     * @ORM\Column(name="ORGANISATOR_TITLE", type="string", length=55, nullable=false)
     */
    private $organisatorTitle;

    /**
     * @var \DateTime $organisatorDate
     *
     * @ORM\Column(name="ORGANISATOR_DATE", type="datetime", nullable=false)
     */
    private $organisatorDate;



    /**
     * Get organisatorId
     *
     * @return integer 
     */
    public function getOrganisatorId()
    {
        return $this->organisatorId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Organisator
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
     * @return Organisator
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
     * Set organisatorTitle
     *
     * @param string $organisatorTitle
     * @return Organisator
     */
    public function setOrganisatorTitle($organisatorTitle)
    {
        $this->organisatorTitle = $organisatorTitle;
    
        return $this;
    }

    /**
     * Get organisatorTitle
     *
     * @return string 
     */
    public function getOrganisatorTitle()
    {
        return $this->organisatorTitle;
    }

    /**
     * Set organisatorDate
     *
     * @param \DateTime $organisatorDate
     * @return Organisator
     */
    public function setOrganisatorDate($organisatorDate)
    {
        $this->organisatorDate = $organisatorDate;
    
        return $this;
    }

    /**
     * Get organisatorDate
     *
     * @return \DateTime 
     */
    public function getOrganisatorDate()
    {
        return $this->organisatorDate;
    }
}