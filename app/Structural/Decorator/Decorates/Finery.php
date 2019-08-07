<?php


namespace App\Structural\Decorator\Decorates;


use App\Structural\Decorator\Persons\Person;

/**
 * 服饰类
 *
 * Class Finery
 *
 * @package App\Structural\Decorator\Decorates
 */
class Finery extends Person
{
    protected $person;

    public function decorate(Person $component)
    {
        $this->person = $component;
    }

    public function show()
    {
        if ($this->person != null)
        {
            $this->person->show();
        }
    }
}
