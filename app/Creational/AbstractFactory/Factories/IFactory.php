<?php


namespace App\Creational\AbstractFactory\Factories;


use App\Creational\AbstractFactory\Products\Departments\IDepartment;
use App\Creational\AbstractFactory\Products\Users\IUser;

interface IFactory
{
    public function createUser();

    public function createDepartment();
}
