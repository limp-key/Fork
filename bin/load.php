<?php

// first load all config in this framework

require_once '../config/config.php';

require_once 'controller/SkeletonController.php';
require_once 'model/SkeletonModel.php';



require "index1.php";
require "index2.php";
$f = 'Second\Second';
$void = new $f();

$void->inp();
