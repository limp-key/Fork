<?php

// zero firewall

require_once 'FireWall/Assay.php';

// first parse request

require_once 'Parse/Parse.php';
require_once 'Route/Route.php';

// second load all config in this framework

require_once '../config/config.php';

// third load all bin files in this framework

require_once 'Controller/SkeletonController.php';
require_once 'Model/SkeletonModel.php';
require_once 'Assay/Request.php';

// load Model, Controller, View

require_once 'Assembly/assembly.php';
