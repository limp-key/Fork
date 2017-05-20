<?php

$path = "limpWork\\Controllers\\".$Controller;

$cont = new $path();

$k = 'out';
$cont->$k();
