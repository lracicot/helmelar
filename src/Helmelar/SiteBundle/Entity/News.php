<?php

namespace Helmelar\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\SiteBundle\Entity\News
 *
 * @ORM\Table(name="NEWS")
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer $newsId
     *
     * @ORM\Column(name="NEWS_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsId;

    /**
     * @var \DateTime $newsDate
     *
     * @ORM\Column(name="NEWS_DATE", type="date", nullable=false)
     */
    private $newsDate;

    /**
     * @var string $newsTitle
     *
     * @ORM\Column(name="NEWS_TITLE", type="string", length=50, nullable=false)
     */
    private $newsTitle;

    /**
     * @var string $newsText
     *
     * @ORM\Column(name="NEWS_TEXT", type="text", nullable=false)
     */
    private $newsText;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer $newsType
     *
     * @ORM\Column(name="NEWS_TYPE", type="integer", nullable=false)
     */
    private $newsType;



    /**
     * Get newsId
     *
     * @return integer 
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set newsDate
     *
     * @param \DateTime $newsDate
     * @return News
     */
    public function setNewsDate($newsDate)
    {
        $this->newsDate = $newsDate;
    
        return $this;
    }

    /**
     * Get newsDate
     *
     * @return \DateTime 
     */
    public function getNewsDate()
    {
        return $this->newsDate;
    }

    /**
     * Set newsTitle
     *
     * @param string $newsTitle
     * @return News
     */
    public function setNewsTitle($newsTitle)
    {
        $this->newsTitle = $newsTitle;
    
        return $this;
    }

    /**
     * Get newsTitle
     *
     * @return string 
     */
    public function getNewsTitle()
    {
        return $this->newsTitle;
    }

    /**
     * Set newsText
     *
     * @param string $newsText
     * @return News
     */
    public function setNewsText($newsText)
    {
        $this->newsText = $newsText;
    
        return $this;
    }

    /**
     * Get newsText
     *
     * @return string 
     */
    public function getNewsText()
    {
        return $this->newsText;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return News
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
     * Set newsType
     *
     * @param integer $newsType
     * @return News
     */
    public function setNewsType($newsType)
    {
        $this->newsType = $newsType;
    
        return $this;
    }

    /**
     * Get newsType
     *
     * @return integer 
     */
    public function getNewsType()
    {
        return $this->newsType;
    }
}