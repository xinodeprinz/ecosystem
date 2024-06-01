<?php

namespace App;

class Plant
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

    public function photosynthesis()
    {
        echo $this->name . " is performing photosynthesis.\n";
    }
}
