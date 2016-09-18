<?php
/**
 * Created by PhpStorm.
 * User: sylwester
 * Date: 09.09.16
 * Time: 21:48
 */

namespace App\Integration\Jira;


class Milestone
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $released;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Milestone
     */
    public function setId(int $id): Milestone
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Milestone
     */
    public function setName(string $name): Milestone
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Milestone
     */
    public function setDescription(string $description): Milestone
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleased(): string
    {
        return $this->released;
    }

    /**
     * @param string $released
     * @return Milestone
     */
    public function setReleased(string $released): Milestone
    {
        $this->released = $released;
        return $this;
    }

}