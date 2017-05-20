<?php

// zero firewall

require_once 'FireWall/Assay.php';

require_once 'Parse/Parse.php';

// first load all config in this framework

require_once 'Route/Route.php';

require_once '../config/config.php';


// second load all bin files in this framework

require_once 'Controller/SkeletonController.php';
require_once 'Model/SkeletonModel.php';

// load Model, Controller, View

require_once 'Assembly/assembly.php';
