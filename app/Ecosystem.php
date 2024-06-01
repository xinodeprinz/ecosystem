<?php

namespace App;

class Ecosystem
{
    public function callEntities()
    {
        // Create instances of entities
        $lion = new Animal("Lion");
        $rose = new Plant("Rose");
        $bee = new Insect("Bee");

        // Call functions and properties of entities
        echo $lion->getName() . "\n";
        $lion->eat();

        echo $rose->getName() . "\n";
        $rose->photosynthesis();

        echo $bee->getName() . "\n";
        $bee->fly();
    }
}
