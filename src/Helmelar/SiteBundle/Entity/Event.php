<?php

namespace Helmelar\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\SiteBundle\Entity\Event
 *
 * @ORM\Table(name="EVENT")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer $eventId
     *
     * @ORM\Column(name="EVENT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string $eventName
     *
     * @ORM\Column(name="EVENT_NAME", type="string", length=255, nullable=false)
     */
    private $eventName;

    /**
     * @var \DateTime $eventDateStart
     *
     * @ORM\Column(name="EVENT_DATE_START", type="datetime", nullable=false)
     */
    private $eventDateStart;

    /**
     * @var \DateTime $eventDateEnd
     *
     * @ORM\Column(name="EVENT_DATE_END", type="datetime", nullable=false)
     */
    private $eventDateEnd;

    /**
     * @var \DateTime $eventTime
     *
     * @ORM\Column(name="EVENT_TIME", type="time", nullable=false)
     */
    private $eventTime;

    /**
     * @var string $eventDescription
     *
     * @ORM\Column(name="EVENT_DESCRIPTION", type="text", nullable=false)
     */
    private $eventDescription;

    /**
     * @var boolean $eventType
     *
     * @ORM\Column(name="EVENT_TYPE", type="boolean", nullable=false)
     */
    private $eventType;

    /**
     * @var float $eventPrice
     *
     * @ORM\Column(name="EVENT_PRICE", type="float", nullable=false)
     */
    private $eventPrice;

    /**
     * @var float $eventReducePrice
     *
     * @ORM\Column(name="EVENT_REDUCE_PRICE", type="float", nullable=false)
     */
    private $eventReducePrice;

    /**
     * @var boolean $eventPreinscript
     *
     * @ORM\Column(name="EVENT_PREINSCRIPT", type="boolean", nullable=false)
     */
    private $eventPreinscript;

    /**
     * @var string $eventPreBrefing
     *
     * @ORM\Column(name="EVENT_PRE_BREFING", type="text", nullable=false)
     */
    private $eventPreBrefing;



    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     * @return Event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    
        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDateStart
     *
     * @param \DateTime $eventDateStart
     * @return Event
     */
    public function setEventDateStart($eventDateStart)
    {
        $this->eventDateStart = $eventDateStart;
    
        return $this;
    }

    /**
     * Get eventDateStart
     *
     * @return \DateTime 
     */
    public function getEventDateStart()
    {
        return $this->eventDateStart;
    }

    /**
     * Set eventDateEnd
     *
     * @param \DateTime $eventDateEnd
     * @return Event
     */
    public function setEventDateEnd($eventDateEnd)
    {
        $this->eventDateEnd = $eventDateEnd;
    
        return $this;
    }

    /**
     * Get eventDateEnd
     *
     * @return \DateTime 
     */
    public function getEventDateEnd()
    {
        return $this->eventDateEnd;
    }

    /**
     * Set eventTime
     *
     * @param \DateTime $eventTime
     * @return Event
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;
    
        return $this;
    }

    /**
     * Get eventTime
     *
     * @return \DateTime 
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Set eventDescription
     *
     * @param string $eventDescription
     * @return Event
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;
    
        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string 
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Set eventType
     *
     * @param boolean $eventType
     * @return Event
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    
        return $this;
    }

    /**
     * Get eventType
     *
     * @return boolean 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set eventPrice
     *
     * @param float $eventPrice
     * @return Event
     */
    public function setEventPrice($eventPrice)
    {
        $this->eventPrice = $eventPrice;
    
        return $this;
    }

    /**
     * Get eventPrice
     *
     * @return float 
     */
    public function getEventPrice()
    {
        return $this->eventPrice;
    }

    /**
     * Set eventReducePrice
     *
     * @param float $eventReducePrice
     * @return Event
     */
    public function setEventReducePrice($eventReducePrice)
    {
        $this->eventReducePrice = $eventReducePrice;
    
        return $this;
    }

    /**
     * Get eventReducePrice
     *
     * @return float 
     */
    public function getEventReducePrice()
    {
        return $this->eventReducePrice;
    }

    /**
     * Set eventPreinscript
     *
     * @param boolean $eventPreinscript
     * @return Event
     */
    public function setEventPreinscript($eventPreinscript)
    {
        $this->eventPreinscript = $eventPreinscript;
    
        return $this;
    }

    /**
     * Get eventPreinscript
     *
     * @return boolean 
     */
    public function getEventPreinscript()
    {
        return $this->eventPreinscript;
    }

    /**
     * Set eventPreBrefing
     *
     * @param string $eventPreBrefing
     * @return Event
     */
    public function setEventPreBrefing($eventPreBrefing)
    {
        $this->eventPreBrefing = $eventPreBrefing;
    
        return $this;
    }

    /**
     * Get eventPreBrefing
     *
     * @return string 
     */
    public function getEventPreBrefing()
    {
        return $this->eventPreBrefing;
    }
}