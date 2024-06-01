<?php

use App\Ecosystem;

require_once "vendor/autoload.php";

// Create an instance of Ecosystem and call the entities
$ecosystem = new Ecosystem();
$ecosystem->callEntities();
