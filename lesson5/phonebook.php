<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";


$phoneBookFacade = \App\ServiceContainer::getInstance()->getPhoneBookFacade();
$phoneBookFacade->execute($argv);


// Inversion of Control = IoC
// Dependency Injection
// Service Container (context container)
// Singleton - class instance is only one

// Lazy Initialization

// Atomicity
// Data corruption / inconsistency

// High Cohesion and Loose Coupling
