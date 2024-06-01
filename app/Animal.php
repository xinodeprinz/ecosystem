<?php

namespace App;

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function eat()
    {
        echo $this->name . " is eating.\n";
    }
}
