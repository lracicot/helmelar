<?php

namespace Helmelar\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\GameBundle\Entity\HelmRune
 *
 * @ORM\Table(name="HELM_RUNE")
 * @ORM\Entity
 */
class Rune
{
    /**
     * @var integer $helmRuneId
     *
     * @ORM\Column(name="HELM_RUNE_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $helmRuneId;

    /**
     * @var string $helmRuneName
     *
     * @ORM\Column(name="HELM_RUNE_NAME", type="string", length=55, nullable=false)
     */
    private $helmRuneName;

    /**
     * @var boolean $helmRuneLvl
     *
     * @ORM\Column(name="HELM_RUNE_LVL", type="boolean", nullable=false)
     */
    private $helmRuneLvl;

    /**
     * @var string $helmRunePower
     *
     * @ORM\Column(name="HELM_RUNE_POWER", type="text", nullable=false)
     */
    private $helmRunePower;

    /**
     * @var string $helmRuneImage
     *
     * @ORM\Column(name="HELM_RUNE_IMAGE", type="string", length=255, nullable=false)
     */
    private $helmRuneImage;



    /**
     * Get helmRuneId
     *
     * @return integer 
     */
    public function getHelmRuneId()
    {
        return $this->helmRuneId;
    }

    /**
     * Set helmRuneName
     *
     * @param string $helmRuneName
     * @return HelmRune
     */
    public function setHelmRuneName($helmRuneName)
    {
        $this->helmRuneName = $helmRuneName;
    
        return $this;
    }

    /**
     * Get helmRuneName
     *
     * @return string 
     */
    public function getHelmRuneName()
    {
        return $this->helmRuneName;
    }

    /**
     * Set helmRuneLvl
     *
     * @param boolean $helmRuneLvl
     * @return HelmRune
     */
    public function setHelmRuneLvl($helmRuneLvl)
    {
        $this->helmRuneLvl = $helmRuneLvl;
    
        return $this;
    }

    /**
     * Get helmRuneLvl
     *
     * @return boolean 
     */
    public function getHelmRuneLvl()
    {
        return $this->helmRuneLvl;
    }

    /**
     * Set helmRunePower
     *
     * @param string $helmRunePower
     * @return HelmRune
     */
    public function setHelmRunePower($helmRunePower)
    {
        $this->helmRunePower = $helmRunePower;
    
        return $this;
    }

    /**
     * Get helmRunePower
     *
     * @return string 
     */
    public function getHelmRunePower()
    {
        return $this->helmRunePower;
    }

    /**
     * Set helmRuneImage
     *
     * @param string $helmRuneImage
     * @return HelmRune
     */
    public function setHelmRuneImage($helmRuneImage)
    {
        $this->helmRuneImage = $helmRuneImage;
    
        return $this;
    }

    /**
     * Get helmRuneImage
     *
     * @return string 
     */
    public function getHelmRuneImage()
    {
        return $this->helmRuneImage;
    }
}