<?php

namespace Helmelar\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\UserBundle\Entity\User
 *
 * @ORM\Table(name="USER")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $userFirstName
     *
     * @ORM\Column(name="USER_FIRST_NAME", type="string", length=255, nullable=false)
     */
    private $userFirstName;

    /**
     * @var string $userLastName
     *
     * @ORM\Column(name="USER_LAST_NAME", type="string", length=255, nullable=false)
     */
    private $userLastName;

    /**
     * @var string $userType
     *
     * @ORM\Column(name="USER_TYPE", type="string", length=255, nullable=false)
     */
    private $userType;

    /**
     * @var boolean $userStatus
     *
     * @ORM\Column(name="USER_STATUS", type="boolean", nullable=false)
     */
    private $userStatus;

    /**
     * @var string $userNote
     *
     * @ORM\Column(name="USER_NOTE", type="text", nullable=true)
     */
    private $userNote;

    /**
     * @var string $userToken
     *
     * @ORM\Column(name="USER_TOKEN", type="string", length=255, nullable=false)
     */
    private $userToken;



    /**
     * Get Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->$id;
    }

    /**
     * Set userFirstName
     *
     * @param string $userFirstName
     * @return User
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;
    
        return $this;
    }

    /**
     * Get userFirstName
     *
     * @return string 
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * Set userLastName
     *
     * @param string $userLastName
     * @return User
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
    
        return $this;
    }

    /**
     * Get userLastName
     *
     * @return string 
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * Set userType
     *
     * @param string $userType
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
    
        return $this;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set userStatus
     *
     * @param boolean $userStatus
     * @return User
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
    
        return $this;
    }

    /**
     * Get userStatus
     *
     * @return boolean 
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set userNote
     *
     * @param string $userNote
     * @return User
     */
    public function setUserNote($userNote)
    {
        $this->userNote = $userNote;
    
        return $this;
    }

    /**
     * Get userNote
     *
     * @return string 
     */
    public function getUserNote()
    {
        return $this->userNote;
    }

    /**
     * Set userToken
     *
     * @param string $userToken
     * @return User
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
    
        return $this;
    }

    /**
     * Get userToken
     *
     * @return string 
     */
    public function getUserToken()
    {
        return $this->userToken;
    }
}