<?php

// TODO why league CSV works with php 7.1 ?

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$phoneBook = new \App\PhoneBook();
$phoneBookFacade = new \App\PhoneBookFacade();

$phoneBookFacade->execute($phoneBook, $argv);


// API = Application Program Interface

// Single Responsibility Principle

// SOLID
