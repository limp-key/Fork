<?php

// first load all config in this framework

require_once '../config/config.php';

// second load all bin files in this framework

require_once 'Parse/parse.php';
require_once 'controller/SkeletonController.php';
require_once 'model/SkeletonModel.php';

// third load all(?) model files in this framework ?????????

require_once '../models/Model.php';

// and load outher files
// load Conrtoller (depending on the request)

require_once "../controllers/$Controller.php";

