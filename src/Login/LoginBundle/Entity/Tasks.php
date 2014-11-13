<?php

namespace Login\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tasks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="task", type="string", length=10)
     */
    private $task;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DueDate", type="datetime")
     */
    private $dueDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DueDate2", type="datetime")
     */
    private $dueDate2;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set task
     *
     * @param string $task
     * @return Tasks
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return string 
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Tasks
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }
    
     /**
     * Get dueDate2
     *
     * @return \DateTime 
     */
    function getDueDate2() {
        return $this->dueDate2;
    }

    function setDueDate2(\DateTime $dueDate2) {
        $this->dueDate2 = $dueDate2;
    }


}
