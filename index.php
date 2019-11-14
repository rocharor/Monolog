<?php

use Src\MonologCustom;

require __DIR__ . "/vendor/autoload.php";


$objMonologCustom = new MonologCustom();


// Console
$objMonologCustom->debug('Log Debug !!!!!');
$objMonologCustom->info('Log Info !!!', ['server' => $_SERVER]);

// // File
$objMonologCustom->warning('Log Warning !!!');

// // Email
$objMonologCustom->critical('Log Critical !!!');

// // Telegran
$objMonologCustom->emergency('Log Emergency !!!');
