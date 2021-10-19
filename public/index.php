<?php

use App\wcs\Hello;

require __DIR__ . '/../vendor/autoload.php';

$hello = new Hello();

echo $hello->talk().PHP_EOL;