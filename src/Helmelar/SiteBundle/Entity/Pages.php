<?php

namespace Helmelar\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\SiteBundle\Entity\Pages
 *
 * @ORM\Table(name="PAGES")
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var integer $pagesId
     *
     * @ORM\Column(name="PAGES_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagesId;

    /**
     * @var integer $relatedId
     *
     * @ORM\Column(name="RELATED_ID", type="integer", nullable=false)
     */
    private $relatedId;

    /**
     * @var string $pagesTitle
     *
     * @ORM\Column(name="PAGES_TITLE", type="string", length=255, nullable=false)
     */
    private $pagesTitle;

    /**
     * @var string $pagesText
     *
     * @ORM\Column(name="PAGES_TEXT", type="text", nullable=false)
     */
    private $pagesText;

    /**
     * @var string $pagesLanguage
     *
     * @ORM\Column(name="PAGES_LANGUAGE", type="string", length=11, nullable=false)
     */
    private $pagesLanguage;

    /**
     * @var \DateTime $pagesTimestamp
     *
     * @ORM\Column(name="PAGES_TIMESTAMP", type="datetime", nullable=false)
     */
    private $pagesTimestamp;

    /**
     * @var integer $pagesOrder
     *
     * @ORM\Column(name="PAGES_ORDER", type="integer", nullable=false)
     */
    private $pagesOrder;



    /**
     * Get pagesId
     *
     * @return integer 
     */
    public function getPagesId()
    {
        return $this->pagesId;
    }

    /**
     * Set relatedId
     *
     * @param integer $relatedId
     * @return Pages
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;
    
        return $this;
    }

    /**
     * Get relatedId
     *
     * @return integer 
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }

    /**
     * Set pagesTitle
     *
     * @param string $pagesTitle
     * @return Pages
     */
    public function setPagesTitle($pagesTitle)
    {
        $this->pagesTitle = $pagesTitle;
    
        return $this;
    }

    /**
     * Get pagesTitle
     *
     * @return string 
     */
    public function getPagesTitle()
    {
        return $this->pagesTitle;
    }

    /**
     * Set pagesText
     *
     * @param string $pagesText
     * @return Pages
     */
    public function setPagesText($pagesText)
    {
        $this->pagesText = $pagesText;
    
        return $this;
    }

    /**
     * Get pagesText
     *
     * @return string 
     */
    public function getPagesText()
    {
        return $this->pagesText;
    }

    /**
     * Set pagesLanguage
     *
     * @param string $pagesLanguage
     * @return Pages
     */
    public function setPagesLanguage($pagesLanguage)
    {
        $this->pagesLanguage = $pagesLanguage;
    
        return $this;
    }

    /**
     * Get pagesLanguage
     *
     * @return string 
     */
    public function getPagesLanguage()
    {
        return $this->pagesLanguage;
    }

    /**
     * Set pagesTimestamp
     *
     * @param \DateTime $pagesTimestamp
     * @return Pages
     */
    public function setPagesTimestamp($pagesTimestamp)
    {
        $this->pagesTimestamp = $pagesTimestamp;
    
        return $this;
    }

    /**
     * Get pagesTimestamp
     *
     * @return \DateTime 
     */
    public function getPagesTimestamp()
    {
        return $this->pagesTimestamp;
    }

    /**
     * Set pagesOrder
     *
     * @param integer $pagesOrder
     * @return Pages
     */
    public function setPagesOrder($pagesOrder)
    {
        $this->pagesOrder = $pagesOrder;
    
        return $this;
    }

    /**
     * Get pagesOrder
     *
     * @return integer 
     */
    public function getPagesOrder()
    {
        return $this->pagesOrder;
    }
}