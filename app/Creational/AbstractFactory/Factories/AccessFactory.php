<?php


namespace App\Creational\AbstractFactory\Factories;


use App\Creational\AbstractFactory\Products\Departments\AccessDepartment;
use App\Creational\AbstractFactory\Products\Users\AccessUser;

class AccessFactory implements IFactory
{
    public function createUser()
    {
        return new AccessUser();
    }

    public function createDepartment()
    {
        return new AccessDepartment();
    }
}
