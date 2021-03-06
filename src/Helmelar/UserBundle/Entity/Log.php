<?php

namespace Helmelar\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\UserBundle\Entity\Log
 *
 * @ORM\Table(name="LOG")
 * @ORM\Entity
 */
class Log
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="LOG_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $logEmail
     *
     * @ORM\Column(name="LOG_EMAIL", type="string", length=255, nullable=false)
     */
    private $logEmail;

    /**
     * @var string $logPassword
     *
     * @ORM\Column(name="LOG_PASSWORD", type="string", length=255, nullable=false)
     */
    private $logPassword;

    /**
     * @var boolean $logStatus
     *
     * @ORM\Column(name="LOG_STATUS", type="boolean", nullable=false)
     */
    private $logStatus;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     */
    private $userId;



    /**
     * Get Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set logEmail
     *
     * @param string $logEmail
     * @return Log
     */
    public function setLogEmail($logEmail)
    {
        $this->logEmail = $logEmail;
    
        return $this;
    }

    /**
     * Get logEmail
     *
     * @return string 
     */
    public function getLogEmail()
    {
        return $this->logEmail;
    }

    /**
     * Set logPassword
     *
     * @param string $logPassword
     * @return Log
     */
    public function setLogPassword($logPassword)
    {
        $this->logPassword = $logPassword;
    
        return $this;
    }

    /**
     * Get logPassword
     *
     * @return string 
     */
    public function getLogPassword()
    {
        return $this->logPassword;
    }

    /**
     * Set logStatus
     *
     * @param boolean $logStatus
     * @return Log
     */
    public function setLogStatus($logStatus)
    {
        $this->logStatus = $logStatus;
    
        return $this;
    }

    /**
     * Get logStatus
     *
     * @return boolean 
     */
    public function getLogStatus()
    {
        return $this->logStatus;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Log
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
}