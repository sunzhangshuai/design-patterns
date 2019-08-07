<?php

namespace App\Structural\Decorator\Decorates;

use App\Structural\Decorator\Persons\Person;

/**
 * 服饰类.
 *
 * Class Finery
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
        if (null != $this->person) {
            $this->person->show();
        }
    }
}
