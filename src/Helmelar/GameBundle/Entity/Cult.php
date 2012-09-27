<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmCult
 *
 * @ORM\Table(name="HELM_CULT")
 * @ORM\Entity
 */
class Cult
{
    /**
     * @var integer $helmCultId
     *
     * @ORM\Column(name="HELM_CULT_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmCultId;

    /**
     * @var string $helmCultName
     *
     * @ORM\Column(name="HELM_CULT_NAME", type="string", length=55, nullable=false)
     */
    private $helmCultName;

    /**
     * @var boolean $helmCultDivinPlan
     *
     * @ORM\Column(name="HELM_CULT_DIVIN_PLAN", type="boolean", nullable=false)
     */
    private $helmCultDivinPlan;

    /**
     * @var string $helmCultDescription
     *
     * @ORM\Column(name="HELM_CULT_DESCRIPTION", type="text", nullable=true)
     */
    private $helmCultDescription;

    /**
     * @var string $helmCultSymbol
     *
     * @ORM\Column(name="HELM_CULT_SYMBOL", type="text", nullable=false)
     */
    private $helmCultSymbol;

    /**
     * @var string $helmCultPhilosophy
     *
     * @ORM\Column(name="HELM_CULT_PHILOSOPHY", type="text", nullable=false)
     */
    private $helmCultPhilosophy;



    /**
     * Get helmCultId
     *
     * @return integer 
     */
    public function getHelmCultId()
    {
        return $this->helmCultId;
    }

    /**
     * Set helmCultName
     *
     * @param string $helmCultName
     * @return HelmCult
     */
    public function setHelmCultName($helmCultName)
    {
        $this->helmCultName = $helmCultName;
    
        return $this;
    }

    /**
     * Get helmCultName
     *
     * @return string 
     */
    public function getHelmCultName()
    {
        return $this->helmCultName;
    }

    /**
     * Set helmCultDivinPlan
     *
     * @param boolean $helmCultDivinPlan
     * @return HelmCult
     */
    public function setHelmCultDivinPlan($helmCultDivinPlan)
    {
        $this->helmCultDivinPlan = $helmCultDivinPlan;
    
        return $this;
    }

    /**
     * Get helmCultDivinPlan
     *
     * @return boolean 
     */
    public function getHelmCultDivinPlan()
    {
        return $this->helmCultDivinPlan;
    }

    /**
     * Set helmCultDescription
     *
     * @param string $helmCultDescription
     * @return HelmCult
     */
    public function setHelmCultDescription($helmCultDescription)
    {
        $this->helmCultDescription = $helmCultDescription;
    
        return $this;
    }

    /**
     * Get helmCultDescription
     *
     * @return string 
     */
    public function getHelmCultDescription()
    {
        return $this->helmCultDescription;
    }

    /**
     * Set helmCultSymbol
     *
     * @param string $helmCultSymbol
     * @return HelmCult
     */
    public function setHelmCultSymbol($helmCultSymbol)
    {
        $this->helmCultSymbol = $helmCultSymbol;
    
        return $this;
    }

    /**
     * Get helmCultSymbol
     *
     * @return string 
     */
    public function getHelmCultSymbol()
    {
        return $this->helmCultSymbol;
    }

    /**
     * Set helmCultPhilosophy
     *
     * @param string $helmCultPhilosophy
     * @return HelmCult
     */
    public function setHelmCultPhilosophy($helmCultPhilosophy)
    {
        $this->helmCultPhilosophy = $helmCultPhilosophy;
    
        return $this;
    }

    /**
     * Get helmCultPhilosophy
     *
     * @return string 
     */
    public function getHelmCultPhilosophy()
    {
        return $this->helmCultPhilosophy;
    }
}