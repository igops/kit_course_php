<?php

// TODO why league CSV works with php 7.1 ?

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$phoneBookFacade = new \App\PhoneBookFacade();
$phoneBookFacade->execute($argv);

// stateless
// no memory sharing
// thread-safe language

// LAMP Stack = Linux + Apache + MySQL + PHP
// LEMP = Apache -> Nginx

// arguments by value
// arguments by reference
