<?php

// third load all(?) model files in this framework ?????????

require_once '../models/Model.php';

// and load outher files
// load Conrtoller (depending on the request)

require_once '../controllers/'.$GLOBALS['response_class'].'.php';

$Class = "limpWork\\Controllers\\".$GLOBALS['response_class'];
$Method = $GLOBALS['response_method'];

$AssemblyClass = new $Class();
$AssemblyClass->$Method();
