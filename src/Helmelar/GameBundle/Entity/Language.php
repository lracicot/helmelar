<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmLanguage
 *
 * @ORM\Table(name="HELM_LANGUAGE")
 * @ORM\Entity
 */
class Language
{
    /**
     * @var integer $helmLanguageId
     *
     * @ORM\Column(name="HELM_LANGUAGE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmLanguageId;

    /**
     * @var string $helmLanguageKey
     *
     * @ORM\Column(name="HELM_LANGUAGE_KEY", type="string", length=255, nullable=false)
     */
    private $helmLanguageKey;

    /**
     * @var string $helmLanguageWord
     *
     * @ORM\Column(name="HELM_LANGUAGE_WORD", type="string", length=255, nullable=false)
     */
    private $helmLanguageWord;

    /**
     * @var integer $helmRaceId
     *
     * @ORM\Column(name="HELM_RACE_ID", type="integer", nullable=false)
     */
    private $helmRaceId;



    /**
     * Get helmLanguageId
     *
     * @return integer 
     */
    public function getHelmLanguageId()
    {
        return $this->helmLanguageId;
    }

    /**
     * Set helmLanguageKey
     *
     * @param string $helmLanguageKey
     * @return HelmLanguage
     */
    public function setHelmLanguageKey($helmLanguageKey)
    {
        $this->helmLanguageKey = $helmLanguageKey;
    
        return $this;
    }

    /**
     * Get helmLanguageKey
     *
     * @return string 
     */
    public function getHelmLanguageKey()
    {
        return $this->helmLanguageKey;
    }

    /**
     * Set helmLanguageWord
     *
     * @param string $helmLanguageWord
     * @return HelmLanguage
     */
    public function setHelmLanguageWord($helmLanguageWord)
    {
        $this->helmLanguageWord = $helmLanguageWord;
    
        return $this;
    }

    /**
     * Get helmLanguageWord
     *
     * @return string 
     */
    public function getHelmLanguageWord()
    {
        return $this->helmLanguageWord;
    }

    /**
     * Set helmRaceId
     *
     * @param integer $helmRaceId
     * @return HelmLanguage
     */
    public function setHelmRaceId($helmRaceId)
    {
        $this->helmRaceId = $helmRaceId;
    
        return $this;
    }

    /**
     * Get helmRaceId
     *
     * @return integer 
     */
    public function getHelmRaceId()
    {
        return $this->helmRaceId;
    }
}