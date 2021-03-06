<?php

namespace Helmelar\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\UserBundle\Entity\Contact
 *
 * @ORM\Table(name="CONTACT")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="CONTACT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $contactTel
     *
     * @ORM\Column(name="CONTACT_TEL", type="string", length=255, nullable=true)
     */
    private $contactTel;

    /**
     * @var string $contactEmail
     *
     * @ORM\Column(name="CONTACT_EMAIL", type="string", length=255, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string $contactPage
     *
     * @ORM\Column(name="CONTACT_PAGE", type="string", length=255, nullable=true)
     */
    private $contactPage;

    /**
     * @var integer $contactType
     *
     * @ORM\Column(name="CONTACT_TYPE", type="integer", nullable=false)
     */
    private $contactType;

    /**
     * @var string $contactFax
     *
     * @ORM\Column(name="CONTACT_FAX", type="string", length=255, nullable=false)
     */
    private $contactFax;

    /**
     * @var string $contactCell
     *
     * @ORM\Column(name="CONTACT_CELL", type="string", length=255, nullable=false)
     */
    private $contactCell;

    /**
     * @var string $contactFullName
     *
     * @ORM\Column(name="CONTACT_FULL_NAME", type="string", length=255, nullable=true)
     */
    private $contactFullName;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer $locationId
     *
     * @ORM\Column(name="LOCATION_ID", type="integer", nullable=true)
     */
    private $locationId;

    /**
     * @var string $contactWebsite
     *
     * @ORM\Column(name="CONTACT_WEBSITE", type="string", length=255, nullable=true)
     */
    private $contactWebsite;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contactTel
     *
     * @param string $contactTel
     * @return Contact
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel = $contactTel;
    
        return $this;
    }

    /**
     * Get contactTel
     *
     * @return string 
     */
    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return Contact
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactPage
     *
     * @param string $contactPage
     * @return Contact
     */
    public function setContactPage($contactPage)
    {
        $this->contactPage = $contactPage;
    
        return $this;
    }

    /**
     * Get contactPage
     *
     * @return string 
     */
    public function getContactPage()
    {
        return $this->contactPage;
    }

    /**
     * Set contactType
     *
     * @param integer $contactType
     * @return Contact
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
    
        return $this;
    }

    /**
     * Get contactType
     *
     * @return integer 
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Set contactFax
     *
     * @param string $contactFax
     * @return Contact
     */
    public function setContactFax($contactFax)
    {
        $this->contactFax = $contactFax;
    
        return $this;
    }

    /**
     * Get contactFax
     *
     * @return string 
     */
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * Set contactCell
     *
     * @param string $contactCell
     * @return Contact
     */
    public function setContactCell($contactCell)
    {
        $this->contactCell = $contactCell;
    
        return $this;
    }

    /**
     * Get contactCell
     *
     * @return string 
     */
    public function getContactCell()
    {
        return $this->contactCell;
    }

    /**
     * Set contactFullName
     *
     * @param string $contactFullName
     * @return Contact
     */
    public function setContactFullName($contactFullName)
    {
        $this->contactFullName = $contactFullName;
    
        return $this;
    }

    /**
     * Get contactFullName
     *
     * @return string 
     */
    public function getContactFullName()
    {
        return $this->contactFullName;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Contact
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
     * Set locationId
     *
     * @param integer $locationId
     * @return Contact
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    
        return $this;
    }

    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set contactWebsite
     *
     * @param string $contactWebsite
     * @return Contact
     */
    public function setContactWebsite($contactWebsite)
    {
        $this->contactWebsite = $contactWebsite;
    
        return $this;
    }

    /**
     * Get contactWebsite
     *
     * @return string 
     */
    public function getContactWebsite()
    {
        return $this->contactWebsite;
    }
}