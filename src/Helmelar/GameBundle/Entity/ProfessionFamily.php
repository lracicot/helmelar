<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmProfessionFamily
 *
 * @ORM\Table(name="HELM_PROFESSION_FAMILY")
 * @ORM\Entity
 */
class ProfessionFamily
{
    /**
     * @var integer $helmProfessionFamilyId
     *
     * @ORM\Column(name="HELM_PROFESSION_FAMILY_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmProfessionFamilyId;

    /**
     * @var string $helmProfessionFamilyName
     *
     * @ORM\Column(name="HELM_PROFESSION_FAMILY_NAME", type="string", length=20, nullable=false)
     */
    private $helmProfessionFamilyName;

    /**
     * @var string $helmProfessionFamilyDescription
     *
     * @ORM\Column(name="HELM_PROFESSION_FAMILY_DESCRIPTION", type="text", nullable=true)
     */
    private $helmProfessionFamilyDescription;



    /**
     * Get helmProfessionFamilyId
     *
     * @return integer 
     */
    public function getHelmProfessionFamilyId()
    {
        return $this->helmProfessionFamilyId;
    }

    /**
     * Set helmProfessionFamilyName
     *
     * @param string $helmProfessionFamilyName
     * @return HelmProfessionFamily
     */
    public function setHelmProfessionFamilyName($helmProfessionFamilyName)
    {
        $this->helmProfessionFamilyName = $helmProfessionFamilyName;
    
        return $this;
    }

    /**
     * Get helmProfessionFamilyName
     *
     * @return string 
     */
    public function getHelmProfessionFamilyName()
    {
        return $this->helmProfessionFamilyName;
    }

    /**
     * Set helmProfessionFamilyDescription
     *
     * @param string $helmProfessionFamilyDescription
     * @return HelmProfessionFamily
     */
    public function setHelmProfessionFamilyDescription($helmProfessionFamilyDescription)
    {
        $this->helmProfessionFamilyDescription = $helmProfessionFamilyDescription;
    
        return $this;
    }

    /**
     * Get helmProfessionFamilyDescription
     *
     * @return string 
     */
    public function getHelmProfessionFamilyDescription()
    {
        return $this->helmProfessionFamilyDescription;
    }
}