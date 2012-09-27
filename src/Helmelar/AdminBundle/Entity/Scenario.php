<?php

namespace Helmelar\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\AdminBundle\Entity\Scenario
 *
 * @ORM\Table(name="SCENARIO")
 * @ORM\Entity
 */
class Scenario
{
    /**
     * @var integer $scenarioId
     *
     * @ORM\Column(name="SCENARIO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scenarioId;

    /**
     * @var integer $eventId
     *
     * @ORM\Column(name="EVENT_ID", type="integer", nullable=false)
     */
    private $eventId;

    /**
     * @var integer $organisatorId
     *
     * @ORM\Column(name="ORGANISATOR_ID", type="integer", nullable=false)
     */
    private $organisatorId;

    /**
     * @var \DateTime $scenarioDate
     *
     * @ORM\Column(name="SCENARIO_DATE", type="datetime", nullable=false)
     */
    private $scenarioDate;



    /**
     * Get scenarioId
     *
     * @return integer 
     */
    public function getScenarioId()
    {
        return $this->scenarioId;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     * @return Scenario
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    
        return $this;
    }

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
     * Set organisatorId
     *
     * @param integer $organisatorId
     * @return Scenario
     */
    public function setOrganisatorId($organisatorId)
    {
        $this->organisatorId = $organisatorId;
    
        return $this;
    }

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
     * Set scenarioDate
     *
     * @param \DateTime $scenarioDate
     * @return Scenario
     */
    public function setScenarioDate($scenarioDate)
    {
        $this->scenarioDate = $scenarioDate;
    
        return $this;
    }

    /**
     * Get scenarioDate
     *
     * @return \DateTime 
     */
    public function getScenarioDate()
    {
        return $this->scenarioDate;
    }
}