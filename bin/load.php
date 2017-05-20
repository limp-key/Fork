<?php

// zero firewall

require_once 'FireWall/Assay.php';

// first load all config in this framework

require_once '../config/config.php';

// second load all bin files in this framework

require_once 'Parse/Parse.php';
require_once 'Controller/SkeletonController.php';
require_once 'Model/SkeletonModel.php';

// third load all(?) model files in this framework ?????????

require_once '../models/Model.php';

// and load outher files
// load Conrtoller (depending on the request)

require_once '../controllers/'.$Controller.'.php';

// load Controller->Method

require_once 'Assembly/assembly.php';
