<?php

namespace Helmelar\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\AdminBundle\Entity\Quest
 *
 * @ORM\Table(name="QUEST")
 * @ORM\Entity
 */
class Quest
{
    /**
     * @var integer $questId
     *
     * @ORM\Column(name="QUEST_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questId;

    /**
     * @var integer $questRefId
     *
     * @ORM\Column(name="QUEST_REF_ID", type="integer", nullable=false)
     */
    private $questRefId;

    /**
     * @var integer $questIdeaId
     *
     * @ORM\Column(name="QUEST_IDEA_ID", type="integer", nullable=false)
     */
    private $questIdeaId;

    /**
     * @var string $questTitle
     *
     * @ORM\Column(name="QUEST_TITLE", type="string", length=255, nullable=false)
     */
    private $questTitle;

    /**
     * @var string $questShortDescription
     *
     * @ORM\Column(name="QUEST_SHORT_DESCRIPTION", type="text", nullable=false)
     */
    private $questShortDescription;

    /**
     * @var string $questDescription
     *
     * @ORM\Column(name="QUEST_DESCRIPTION", type="text", nullable=false)
     */
    private $questDescription;

    /**
     * @var string $questIntro
     *
     * @ORM\Column(name="QUEST_INTRO", type="text", nullable=false)
     */
    private $questIntro;

    /**
     * @var string $questGoal
     *
     * @ORM\Column(name="QUEST_GOAL", type="text", nullable=false)
     */
    private $questGoal;

    /**
     * @var string $questTarget
     *
     * @ORM\Column(name="QUEST_TARGET", type="text", nullable=false)
     */
    private $questTarget;

    /**
     * @var integer $questLength
     *
     * @ORM\Column(name="QUEST_LENGTH", type="integer", nullable=false)
     */
    private $questLength;

    /**
     * @var \DateTime $questDate
     *
     * @ORM\Column(name="QUEST_DATE", type="datetime", nullable=false)
     */
    private $questDate;

    /**
     * @var integer $organisatorId
     *
     * @ORM\Column(name="ORGANISATOR_ID", type="integer", nullable=false)
     */
    private $organisatorId;

    /**
     * @var string $questNote
     *
     * @ORM\Column(name="QUEST_NOTE", type="text", nullable=false)
     */
    private $questNote;


}
