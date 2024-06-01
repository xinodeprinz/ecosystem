<?php

namespace App;

class Insect
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

    public function fly()
    {
        echo $this->name . " is flying.\n";
    }
}
