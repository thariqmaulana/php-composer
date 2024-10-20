<?php



require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/thariq/belajar-php-composer-hello/src/Customer.php';

use ThariqLibrary\Belajar\Customer;// jangan sama dengan src\data sepertinya. Crash
$customer = new Customer("Thariq");
echo $customer->sayHello("Said") . PHP_EOL; 

$cust = new Customer("Thariq");
echo $cust->sayHello() . PHP_EOL; 