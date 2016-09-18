<?php
/**
 * Created by PhpStorm.
 * User: sylwester
 * Date: 09.09.16
 * Time: 21:44
 */

namespace App\Integration\Jira;
//{"id":11, "text":"Project #1", type:gantt.config.types.project, "progress": 0.6, "open": true},
//
//{"id":12, "text":"Task #1", "start_date":"03-04-2013", "duration":"5", "parent":"11", "progress": 1, "open": true},
//{"id":13, "text":"Task #2", "start_date":"03-04-2013", type:gantt.config.types.project, "parent":"11", "progress": 0.5, "open": true},
//{"id":14, "text":"Task #3", "start_date":"02-04-2013", "duration":"6", "parent":"11", "progress": 0.8, "open": true},
//{"id":15, "text":"Task #4", type:gantt.config.types.project, "parent":"11", "progress": 0.2, "open": true},
//{"id":16, "text":"Final milestone", "start_date":"15-04-2013", type:gantt.config.types.milestone, "parent":"11", "progress": 0, "open": true},
//
//{"id":17, "text":"Task #2.1", "start_date":"03-04-2013", "duration":"2", "parent":"13", "progress": 1, "open": true},
//{"id":18, "text":"Task #2.2", "start_date":"06-04-2013", "duration":"3", "parent":"13", "progress": 0.8, "open": true},
//{"id":19, "text":"Task #2.3", "start_date":"10-04-2013", "duration":"4", "parent":"13", "progress": 0.2, "open": true},
//{"id":20, "text":"Task #2.4", "start_date":"10-04-2013", "duration":"4", "parent":"13", "progress": 0, "open": true},
//{"id":21, "text":"Task #4.1", "start_date":"03-04-2013", "duration":"4", "parent":"15", "progress": 0.5, "open": true},
//{"id":22, "text":"Task #4.2", "start_date":"03-04-2013", "duration":"4", "parent":"15", "progress": 0.1, "open": true},
//{"id":23, "text":"Mediate milestone", "start_date":"14-04-2013", type:gantt.config.types.milestone, "parent":"15", "progress": 0, "open": true}

class Task
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $text;
    /**
     * @var \DateTime
     */
    private $startDate;
    /**
     * @var integer
     */
    private $duration;
    /**
     * @var integer
     */
    private $parent;
    /**
     * @var string
     */
    private $type;
    /**
     * @var float
     */
    private $progress;
    /**
     * @var bool
     */
    private $open;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Task
     */
    public function setId(int $id): Task
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Task
     */
    public function setText(string $text): Task
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Task
     */
    public function setStartDate(\DateTime $startDate): Task
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Task
     */
    public function setDuration(int $duration): Task
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getParent(): int
    {
        return $this->parent;
    }

    /**
     * @param int $parent
     * @return Task
     */
    public function setParent(int $parent): Task
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Task
     */
    public function setType(string $type): Task
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return float
     */
    public function getProgress(): float
    {
        return $this->progress;
    }

    /**
     * @param float $progress
     * @return Task
     */
    public function setProgress(float $progress): Task
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isOpen(): bool
    {
        return $this->open;
    }

    /**
     * @param boolean $open
     * @return Task
     */
    public function setOpen(bool $open): Task
    {
        $this->open = $open;
        return $this;
    }

}