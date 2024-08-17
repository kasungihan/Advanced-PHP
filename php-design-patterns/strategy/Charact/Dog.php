<?php

namespace App\Charact;

use App\Animal;

class Dog implements Animal
{
    public function eat()
    {
        return 'chicken';
    }
}
