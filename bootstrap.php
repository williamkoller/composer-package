<?php

use William\Src\Hello;

require __DIR__.'/vendor/autoload.php';

// create a log channel
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log',
 Monolog\Logger::WARNING));

// add records to the log
$log->warning((new Hello())->say('William'));
