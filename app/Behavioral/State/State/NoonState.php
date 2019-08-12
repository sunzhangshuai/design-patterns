<?php


namespace App\Behavioral\State\State;

use App\Behavioral\State\Work;

class NoonState extends State
{
    /**
     * 写代码
     *
     * @param Work $work
     *
     * @return string
     */
    public function WriteProgram(Work $work)
    {
        if ($work->getHour() < 13) {
            return sprintf("当前时间：%s 饿了，午饭；犯困，午休\n", $work->getHour());
        }
        $work->setState(new AfterNoonState());
        return $work->WriteProgram();
    }
}
