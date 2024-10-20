<?php

require_once __DIR__ . '/vendor/autoload.php';

use ThariqLibrary\Data\People;

$people = new People("Thariq");

$people->sayHello("Said");