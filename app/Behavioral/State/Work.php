<?php


namespace App\Behavioral\State;

use App\Behavioral\State\State\ForenoonState;
use App\Behavioral\State\State\State;

class Work
{
    private $current;

    private $finished = true;

    private $hour;

    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour): void
    {
        $this->hour = $hour;
    }

    /**
     * @return mixed
     */
    public function getTaskFinishedState()
    {
        return $this->finished;
    }

    /**
     * @param bool $bool
     */
    public function setTaskFinished($bool)
    {
        $this->finished = $bool;
    }

    /**
     * 设置状态
     *
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->current = $state;
    }

    /**
     * 撸代码
     *
     * @return string
     */
    public function WriteProgram()
    {
        return $this->current->WriteProgram($this);
    }
}
