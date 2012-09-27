<?php

namespace Helmelar\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\SiteBundle\Entity\Faq
 *
 * @ORM\Table(name="FAQ")
 * @ORM\Entity
 */
class Faq
{
    /**
     * @var integer $faqId
     *
     * @ORM\Column(name="FAQ_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faqId;

    /**
     * @var boolean $faqCategoryId
     *
     * @ORM\Column(name="FAQ_CATEGORY_ID", type="boolean", nullable=false)
     */
    private $faqCategoryId;

    /**
     * @var string $faqQuestion
     *
     * @ORM\Column(name="FAQ_QUESTION", type="text", nullable=false)
     */
    private $faqQuestion;

    /**
     * @var string $faqAnswer
     *
     * @ORM\Column(name="FAQ_ANSWER", type="text", nullable=false)
     */
    private $faqAnswer;

    /**
     * @var \DateTime $faqDate
     *
     * @ORM\Column(name="FAQ_DATE", type="date", nullable=false)
     */
    private $faqDate;



    /**
     * Get faqId
     *
     * @return integer 
     */
    public function getFaqId()
    {
        return $this->faqId;
    }

    /**
     * Set faqCategoryId
     *
     * @param boolean $faqCategoryId
     * @return Faq
     */
    public function setFaqCategoryId($faqCategoryId)
    {
        $this->faqCategoryId = $faqCategoryId;
    
        return $this;
    }

    /**
     * Get faqCategoryId
     *
     * @return boolean 
     */
    public function getFaqCategoryId()
    {
        return $this->faqCategoryId;
    }

    /**
     * Set faqQuestion
     *
     * @param string $faqQuestion
     * @return Faq
     */
    public function setFaqQuestion($faqQuestion)
    {
        $this->faqQuestion = $faqQuestion;
    
        return $this;
    }

    /**
     * Get faqQuestion
     *
     * @return string 
     */
    public function getFaqQuestion()
    {
        return $this->faqQuestion;
    }

    /**
     * Set faqAnswer
     *
     * @param string $faqAnswer
     * @return Faq
     */
    public function setFaqAnswer($faqAnswer)
    {
        $this->faqAnswer = $faqAnswer;
    
        return $this;
    }

    /**
     * Get faqAnswer
     *
     * @return string 
     */
    public function getFaqAnswer()
    {
        return $this->faqAnswer;
    }

    /**
     * Set faqDate
     *
     * @param \DateTime $faqDate
     * @return Faq
     */
    public function setFaqDate($faqDate)
    {
        $this->faqDate = $faqDate;
    
        return $this;
    }

    /**
     * Get faqDate
     *
     * @return \DateTime 
     */
    public function getFaqDate()
    {
        return $this->faqDate;
    }
}