<?php

namespace Person;

class Person 
{
    private $first;

    public $last;

    public $age;

    public function __construct(string $name)
    {
        $this->first = $name;
    }

    //static class use to not want save in memery and direct action function
    public static $drinkingAge = 21; 


    public function setFirstName($firstName)
    {
        $this->first = $firstName;
    }

    public function getFirstName()
    {
        return $this->first; // you can access private property using this method
    }

    public static function setDrinkingAge($newDa)
    {
        self::$drinkingAge = $newDa;
    }

    public static function getDrinkingAge()
    {
        return self::$drinkingAge;
    }


}

class Pet extends Person {

    public function owner()
    {
        $a = $this->first;
        return $a;
    }

}