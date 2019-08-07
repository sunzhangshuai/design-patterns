<?php


namespace App\Creational\AbstractFactory\Factories;


use App\Creational\AbstractFactory\Products\Departments\SqlserverDepartment;
use App\Creational\AbstractFactory\Products\Users\SqlserverUser;

class SqlserverFactory implements IFactory
{
    public function createUser(): SqlserverUser
    {
        return new SqlserverUser();
    }

    public function createDepartment(): SqlserverDepartment
    {
        return new SqlserverDepartment();
    }
}
