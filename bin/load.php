<?php

ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

// Zero firewall

require_once 'FireWall/Assay.php';

// First parse request

require_once 'Parse/Request.php';
require_once 'Route/Route.php';

// Second load all config in this framework

require_once '../config/config.php';

// Third load Model and Controller in bin folder


require_once 'Controller/SkeletonController.php';
require_once 'Model/SkeletonModel.php';
require_once 'Assay/Request.php';
require_once 'Assay/Validation.php';
require_once 'Session/SessionCreate.php';
require_once 'Cookie/CookieCreate.php';
require_once 'Assistant/Helper.php';
require_once 'Assistant/Exception.php';


// load Model, Controller, View

require_once 'Assembly/AssemblyModels.php';
require_once 'Assembly/AssemblyControllers.php';
require_once 'Assembly/Main.php';
