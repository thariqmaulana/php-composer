<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$log = new Logger("Thariq");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("halo");
