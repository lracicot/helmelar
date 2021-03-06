<?php

namespace Helmelar\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\UserBundle\Entity\Location
 *
 * @ORM\Table(name="LOCATION")
 * @ORM\Entity
 */
class Location
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="LOCATION_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $locationAddress
     *
     * @ORM\Column(name="LOCATION_ADDRESS", type="integer", nullable=true)
     */
    private $locationAddress;

    /**
     * @var string $locationSuite
     *
     * @ORM\Column(name="LOCATION_SUITE", type="string", length=255, nullable=false)
     */
    private $locationSuite;

    /**
     * @var string $locationRoad
     *
     * @ORM\Column(name="LOCATION_ROAD", type="string", length=255, nullable=true)
     */
    private $locationRoad;

    /**
     * @var string $locationCity
     *
     * @ORM\Column(name="LOCATION_CITY", type="string", length=255, nullable=false)
     */
    private $locationCity;

    /**
     * @var string $locationState
     *
     * @ORM\Column(name="LOCATION_STATE", type="string", length=255, nullable=false)
     */
    private $locationState;

    /**
     * @var string $locationCountry
     *
     * @ORM\Column(name="LOCATION_COUNTRY", type="string", length=255, nullable=false)
     */
    private $locationCountry;

    /**
     * @var string $locationPostalCode
     *
     * @ORM\Column(name="LOCATION_POSTAL_CODE", type="string", length=255, nullable=true)
     */
    private $locationPostalCode;

    /**
     * @var string $locationTimeZone
     *
     * @ORM\Column(name="LOCATION_TIME_ZONE", type="string", length=255, nullable=false)
     */
    private $locationTimeZone;

    /**
     * @var string $locationNote
     *
     * @ORM\Column(name="LOCATION_NOTE", type="text", nullable=true)
     */
    private $locationNote;



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
     * Set locationAddress
     *
     * @param integer $locationAddress
     * @return Location
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;
    
        return $this;
    }

    /**
     * Get locationAddress
     *
     * @return integer 
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Set locationSuite
     *
     * @param string $locationSuite
     * @return Location
     */
    public function setLocationSuite($locationSuite)
    {
        $this->locationSuite = $locationSuite;
    
        return $this;
    }

    /**
     * Get locationSuite
     *
     * @return string 
     */
    public function getLocationSuite()
    {
        return $this->locationSuite;
    }

    /**
     * Set locationRoad
     *
     * @param string $locationRoad
     * @return Location
     */
    public function setLocationRoad($locationRoad)
    {
        $this->locationRoad = $locationRoad;
    
        return $this;
    }

    /**
     * Get locationRoad
     *
     * @return string 
     */
    public function getLocationRoad()
    {
        return $this->locationRoad;
    }

    /**
     * Set locationCity
     *
     * @param string $locationCity
     * @return Location
     */
    public function setLocationCity($locationCity)
    {
        $this->locationCity = $locationCity;
    
        return $this;
    }

    /**
     * Get locationCity
     *
     * @return string 
     */
    public function getLocationCity()
    {
        return $this->locationCity;
    }

    /**
     * Set locationState
     *
     * @param string $locationState
     * @return Location
     */
    public function setLocationState($locationState)
    {
        $this->locationState = $locationState;
    
        return $this;
    }

    /**
     * Get locationState
     *
     * @return string 
     */
    public function getLocationState()
    {
        return $this->locationState;
    }

    /**
     * Set locationCountry
     *
     * @param string $locationCountry
     * @return Location
     */
    public function setLocationCountry($locationCountry)
    {
        $this->locationCountry = $locationCountry;
    
        return $this;
    }

    /**
     * Get locationCountry
     *
     * @return string 
     */
    public function getLocationCountry()
    {
        return $this->locationCountry;
    }

    /**
     * Set locationPostalCode
     *
     * @param string $locationPostalCode
     * @return Location
     */
    public function setLocationPostalCode($locationPostalCode)
    {
        $this->locationPostalCode = $locationPostalCode;
    
        return $this;
    }

    /**
     * Get locationPostalCode
     *
     * @return string 
     */
    public function getLocationPostalCode()
    {
        return $this->locationPostalCode;
    }

    /**
     * Set locationTimeZone
     *
     * @param string $locationTimeZone
     * @return Location
     */
    public function setLocationTimeZone($locationTimeZone)
    {
        $this->locationTimeZone = $locationTimeZone;
    
        return $this;
    }

    /**
     * Get locationTimeZone
     *
     * @return string 
     */
    public function getLocationTimeZone()
    {
        return $this->locationTimeZone;
    }

    /**
     * Set locationNote
     *
     * @param string $locationNote
     * @return Location
     */
    public function setLocationNote($locationNote)
    {
        $this->locationNote = $locationNote;
    
        return $this;
    }

    /**
     * Get locationNote
     *
     * @return string 
     */
    public function getLocationNote()
    {
        return $this->locationNote;
    }
}