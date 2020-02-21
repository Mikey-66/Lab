<?php

require_once "./vendor/autoload.php";

$x = \Lab\Utils\ArrayHelper::array_first(['sdsd'=>'sdsd', 1,2,1]);

var_dump($x);

die;
