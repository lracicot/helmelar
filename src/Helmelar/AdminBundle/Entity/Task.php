<?php

namespace Helmelar\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helmelar\AdminBundle\Entity\Task
 *
 * @ORM\Table(name="TASK")
 * @ORM\Entity
 */
class Task
{
    /**
     * @var integer $taskId
     *
     * @ORM\Column(name="TASK_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskId;

    /**
     * @var string $taskName
     *
     * @ORM\Column(name="TASK_NAME", type="string", length=255, nullable=false)
     */
    private $taskName;

    /**
     * @var string $taskDescription
     *
     * @ORM\Column(name="TASK_DESCRIPTION", type="text", nullable=false)
     */
    private $taskDescription;

    /**
     * @var boolean $taskType
     *
     * @ORM\Column(name="TASK_TYPE", type="boolean", nullable=false)
     */
    private $taskType;

    /**
     * @var boolean $taskPriority
     *
     * @ORM\Column(name="TASK_PRIORITY", type="boolean", nullable=false)
     */
    private $taskPriority;

    /**
     * @var integer $senderOrganisatorId
     *
     * @ORM\Column(name="SENDER_ORGANISATOR_ID", type="integer", nullable=false)
     */
    private $senderOrganisatorId;

    /**
     * @var integer $receiverOrganisatorId
     *
     * @ORM\Column(name="RECEIVER_ORGANISATOR_ID", type="integer", nullable=false)
     */
    private $receiverOrganisatorId;

    /**
     * @var boolean $taskStatus
     *
     * @ORM\Column(name="TASK_STATUS", type="boolean", nullable=false)
     */
    private $taskStatus;

    /**
     * @var boolean $taskLockStatus
     *
     * @ORM\Column(name="TASK_LOCK_STATUS", type="boolean", nullable=false)
     */
    private $taskLockStatus;

    /**
     * @var boolean $taskPrctComplete
     *
     * @ORM\Column(name="TASK_PRCT_COMPLETE", type="boolean", nullable=false)
     */
    private $taskPrctComplete;

    /**
     * @var float $taskTimeEstimated
     *
     * @ORM\Column(name="TASK_TIME_ESTIMATED", type="float", nullable=false)
     */
    private $taskTimeEstimated;

    /**
     * @var float $taskTimeCompleted
     *
     * @ORM\Column(name="TASK_TIME_COMPLETED", type="float", nullable=false)
     */
    private $taskTimeCompleted;

    /**
     * @var string $taskNote
     *
     * @ORM\Column(name="TASK_NOTE", type="text", nullable=false)
     */
    private $taskNote;

    /**
     * @var \DateTime $taskDateCreated
     *
     * @ORM\Column(name="TASK_DATE_CREATED", type="date", nullable=false)
     */
    private $taskDateCreated;

    /**
     * @var \DateTime $taskDateAccepted
     *
     * @ORM\Column(name="TASK_DATE_ACCEPTED", type="date", nullable=false)
     */
    private $taskDateAccepted;

    /**
     * @var \DateTime $taskDateCompleted
     *
     * @ORM\Column(name="TASK_DATE_COMPLETED", type="date", nullable=false)
     */
    private $taskDateCompleted;

    /**
     * @var \DateTime $taskTimestamp
     *
     * @ORM\Column(name="TASK_TIMESTAMP", type="datetime", nullable=false)
     */
    private $taskTimestamp;

    /**
     * @var \DateTime $taskDateDeadline
     *
     * @ORM\Column(name="TASK_DATE_DEADLINE", type="date", nullable=false)
     */
    private $taskDateDeadline;

    /**
     * @var string $taskComments
     *
     * @ORM\Column(name="TASK_COMMENTS", type="text", nullable=false)
     */
    private $taskComments;

    /**
     * @var integer $taskOrder
     *
     * @ORM\Column(name="TASK_ORDER", type="integer", nullable=false)
     */
    private $taskOrder;



    /**
     * Get taskId
     *
     * @return integer 
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * Set taskName
     *
     * @param string $taskName
     * @return Task
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
    
        return $this;
    }

    /**
     * Get taskName
     *
     * @return string 
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Set taskDescription
     *
     * @param string $taskDescription
     * @return Task
     */
    public function setTaskDescription($taskDescription)
    {
        $this->taskDescription = $taskDescription;
    
        return $this;
    }

    /**
     * Get taskDescription
     *
     * @return string 
     */
    public function getTaskDescription()
    {
        return $this->taskDescription;
    }

    /**
     * Set taskType
     *
     * @param boolean $taskType
     * @return Task
     */
    public function setTaskType($taskType)
    {
        $this->taskType = $taskType;
    
        return $this;
    }

    /**
     * Get taskType
     *
     * @return boolean 
     */
    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * Set taskPriority
     *
     * @param boolean $taskPriority
     * @return Task
     */
    public function setTaskPriority($taskPriority)
    {
        $this->taskPriority = $taskPriority;
    
        return $this;
    }

    /**
     * Get taskPriority
     *
     * @return boolean 
     */
    public function getTaskPriority()
    {
        return $this->taskPriority;
    }

    /**
     * Set senderOrganisatorId
     *
     * @param integer $senderOrganisatorId
     * @return Task
     */
    public function setSenderOrganisatorId($senderOrganisatorId)
    {
        $this->senderOrganisatorId = $senderOrganisatorId;
    
        return $this;
    }

    /**
     * Get senderOrganisatorId
     *
     * @return integer 
     */
    public function getSenderOrganisatorId()
    {
        return $this->senderOrganisatorId;
    }

    /**
     * Set receiverOrganisatorId
     *
     * @param integer $receiverOrganisatorId
     * @return Task
     */
    public function setReceiverOrganisatorId($receiverOrganisatorId)
    {
        $this->receiverOrganisatorId = $receiverOrganisatorId;
    
        return $this;
    }

    /**
     * Get receiverOrganisatorId
     *
     * @return integer 
     */
    public function getReceiverOrganisatorId()
    {
        return $this->receiverOrganisatorId;
    }

    /**
     * Set taskStatus
     *
     * @param boolean $taskStatus
     * @return Task
     */
    public function setTaskStatus($taskStatus)
    {
        $this->taskStatus = $taskStatus;
    
        return $this;
    }

    /**
     * Get taskStatus
     *
     * @return boolean 
     */
    public function getTaskStatus()
    {
        return $this->taskStatus;
    }

    /**
     * Set taskLockStatus
     *
     * @param boolean $taskLockStatus
     * @return Task
     */
    public function setTaskLockStatus($taskLockStatus)
    {
        $this->taskLockStatus = $taskLockStatus;
    
        return $this;
    }

    /**
     * Get taskLockStatus
     *
     * @return boolean 
     */
    public function getTaskLockStatus()
    {
        return $this->taskLockStatus;
    }

    /**
     * Set taskPrctComplete
     *
     * @param boolean $taskPrctComplete
     * @return Task
     */
    public function setTaskPrctComplete($taskPrctComplete)
    {
        $this->taskPrctComplete = $taskPrctComplete;
    
        return $this;
    }

    /**
     * Get taskPrctComplete
     *
     * @return boolean 
     */
    public function getTaskPrctComplete()
    {
        return $this->taskPrctComplete;
    }

    /**
     * Set taskTimeEstimated
     *
     * @param float $taskTimeEstimated
     * @return Task
     */
    public function setTaskTimeEstimated($taskTimeEstimated)
    {
        $this->taskTimeEstimated = $taskTimeEstimated;
    
        return $this;
    }

    /**
     * Get taskTimeEstimated
     *
     * @return float 
     */
    public function getTaskTimeEstimated()
    {
        return $this->taskTimeEstimated;
    }

    /**
     * Set taskTimeCompleted
     *
     * @param float $taskTimeCompleted
     * @return Task
     */
    public function setTaskTimeCompleted($taskTimeCompleted)
    {
        $this->taskTimeCompleted = $taskTimeCompleted;
    
        return $this;
    }

    /**
     * Get taskTimeCompleted
     *
     * @return float 
     */
    public function getTaskTimeCompleted()
    {
        return $this->taskTimeCompleted;
    }

    /**
     * Set taskNote
     *
     * @param string $taskNote
     * @return Task
     */
    public function setTaskNote($taskNote)
    {
        $this->taskNote = $taskNote;
    
        return $this;
    }

    /**
     * Get taskNote
     *
     * @return string 
     */
    public function getTaskNote()
    {
        return $this->taskNote;
    }

    /**
     * Set taskDateCreated
     *
     * @param \DateTime $taskDateCreated
     * @return Task
     */
    public function setTaskDateCreated($taskDateCreated)
    {
        $this->taskDateCreated = $taskDateCreated;
    
        return $this;
    }

    /**
     * Get taskDateCreated
     *
     * @return \DateTime 
     */
    public function getTaskDateCreated()
    {
        return $this->taskDateCreated;
    }

    /**
     * Set taskDateAccepted
     *
     * @param \DateTime $taskDateAccepted
     * @return Task
     */
    public function setTaskDateAccepted($taskDateAccepted)
    {
        $this->taskDateAccepted = $taskDateAccepted;
    
        return $this;
    }

    /**
     * Get taskDateAccepted
     *
     * @return \DateTime 
     */
    public function getTaskDateAccepted()
    {
        return $this->taskDateAccepted;
    }

    /**
     * Set taskDateCompleted
     *
     * @param \DateTime $taskDateCompleted
     * @return Task
     */
    public function setTaskDateCompleted($taskDateCompleted)
    {
        $this->taskDateCompleted = $taskDateCompleted;
    
        return $this;
    }

    /**
     * Get taskDateCompleted
     *
     * @return \DateTime 
     */
    public function getTaskDateCompleted()
    {
        return $this->taskDateCompleted;
    }

    /**
     * Set taskTimestamp
     *
     * @param \DateTime $taskTimestamp
     * @return Task
     */
    public function setTaskTimestamp($taskTimestamp)
    {
        $this->taskTimestamp = $taskTimestamp;
    
        return $this;
    }

    /**
     * Get taskTimestamp
     *
     * @return \DateTime 
     */
    public function getTaskTimestamp()
    {
        return $this->taskTimestamp;
    }

    /**
     * Set taskDateDeadline
     *
     * @param \DateTime $taskDateDeadline
     * @return Task
     */
    public function setTaskDateDeadline($taskDateDeadline)
    {
        $this->taskDateDeadline = $taskDateDeadline;
    
        return $this;
    }

    /**
     * Get taskDateDeadline
     *
     * @return \DateTime 
     */
    public function getTaskDateDeadline()
    {
        return $this->taskDateDeadline;
    }

    /**
     * Set taskComments
     *
     * @param string $taskComments
     * @return Task
     */
    public function setTaskComments($taskComments)
    {
        $this->taskComments = $taskComments;
    
        return $this;
    }

    /**
     * Get taskComments
     *
     * @return string 
     */
    public function getTaskComments()
    {
        return $this->taskComments;
    }

    /**
     * Set taskOrder
     *
     * @param integer $taskOrder
     * @return Task
     */
    public function setTaskOrder($taskOrder)
    {
        $this->taskOrder = $taskOrder;
    
        return $this;
    }

    /**
     * Get taskOrder
     *
     * @return integer 
     */
    public function getTaskOrder()
    {
        return $this->taskOrder;
    }
}