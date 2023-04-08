<?php

require 'vendor/autoload.php';

use CowSay\Cow;


$bessie = new Cow('Hello, Farm!');


// or just echo the object for direct output
echo $bessie;


$bessie ->setTongue('U');
echo $bessie;