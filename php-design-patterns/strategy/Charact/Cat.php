<?php

namespace App\Charact;

use App\Animal;

class Cat implements Animal
{
    public function eat()
    {
        return 'fish';
    }
}
