<?php

require_once '../vendor/autoload.php';

use App\Hello;

$hello1 = new App\Wcs\Hello();
echo $hello1->talk();

use HelloWorld\SayHello;

echo SayHello::world();