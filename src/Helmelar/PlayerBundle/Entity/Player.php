<?php

namespace Helmelar\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\PlayerBundle\Entity\Player
 *
 * @ORM\Table(name="PLAYER")
 * @ORM\Entity
 */
class Player
{
    /**
     * @var integer $playerId
     *
     * @ORM\Column(name="PLAYER_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $playerId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime $playerBirthdate
     *
     * @ORM\Column(name="PLAYER_BIRTHDATE", type="date", nullable=false)
     */
    private $playerBirthdate;

    /**
     * @var \DateTime $playerCreationDate
     *
     * @ORM\Column(name="PLAYER_CREATION_DATE", type="datetime", nullable=false)
     */
    private $playerCreationDate;

    /**
     * @var string $playerHin
     *
     * @ORM\Column(name="PLAYER_HIN", type="string", length=12, nullable=false)
     */
    private $playerHin;

    /**
     * @var string $playerSickness
     *
     * @ORM\Column(name="PLAYER_SICKNESS", type="text", nullable=false)
     */
    private $playerSickness;



    /**
     * Get playerId
     *
     * @return integer 
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Player
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
     * Set playerBirthdate
     *
     * @param \DateTime $playerBirthdate
     * @return Player
     */
    public function setPlayerBirthdate($playerBirthdate)
    {
        $this->playerBirthdate = $playerBirthdate;
    
        return $this;
    }

    /**
     * Get playerBirthdate
     *
     * @return \DateTime 
     */
    public function getPlayerBirthdate()
    {
        return $this->playerBirthdate;
    }

    /**
     * Set playerCreationDate
     *
     * @param \DateTime $playerCreationDate
     * @return Player
     */
    public function setPlayerCreationDate($playerCreationDate)
    {
        $this->playerCreationDate = $playerCreationDate;
    
        return $this;
    }

    /**
     * Get playerCreationDate
     *
     * @return \DateTime 
     */
    public function getPlayerCreationDate()
    {
        return $this->playerCreationDate;
    }

    /**
     * Set playerHin
     *
     * @param string $playerHin
     * @return Player
     */
    public function setPlayerHin($playerHin)
    {
        $this->playerHin = $playerHin;
    
        return $this;
    }

    /**
     * Get playerHin
     *
     * @return string 
     */
    public function getPlayerHin()
    {
        return $this->playerHin;
    }

    /**
     * Set playerSickness
     *
     * @param string $playerSickness
     * @return Player
     */
    public function setPlayerSickness($playerSickness)
    {
        $this->playerSickness = $playerSickness;
    
        return $this;
    }

    /**
     * Get playerSickness
     *
     * @return string 
     */
    public function getPlayerSickness()
    {
        return $this->playerSickness;
    }
}