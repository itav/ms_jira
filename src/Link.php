<?php
/**
 * Created by PhpStorm.
 * User: sylwester
 * Date: 16.09.16
 * Time: 21:52
 */

namespace App\Integration\Jira;


class Link
{
    const TYPE_ZERO = 0;
    const TYPE_ONE = 1;
    const TYPE_TWO = 2;
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $source;
    /**
     * @var int
     */
    private $target;
    /**
     * @var int
     */
    private $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Link
     */
    public function setId(int $id): Link
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @param int $source
     * @return Link
     */
    public function setSource(int $source): Link
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return int
     */
    public function getTarget(): int
    {
        return $this->target;
    }

    /**
     * @param int $target
     * @return Link
     */
    public function setTarget(int $target): Link
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Link
     */
    public function setType(int $type): Link
    {
        $this->type = $type;
        return $this;
    }

}