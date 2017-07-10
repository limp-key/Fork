<?php

// Zero firewall

//require_once 'FireWall/Assay.php';

// First parse request

require_once 'Parse/Request.php';
require_once 'Route/Route.php';

require_once 'Config/Main.php';
require_once 'Config/DataBase.php';
require_once 'Config/Mail.php';

// Load all config in this framework

require_once 'Assembly/Request.php';
require_once 'Assembly/Config.php';
require_once 'Assembly/Route.php';

// Second include framework modules

require_once 'Controller/SkeletonController.php';
require_once 'Model/SkeletonModel.php';
require_once 'Assay/Request.php';
require_once 'Assay/Validation.php';
require_once 'Session/SessionCreate.php';
require_once 'Cookie/CookieCreate.php';
require_once 'Assistant/Helper.php';
require_once 'Assistant/Exception.php';

// load Model, Controller, View

require_once 'Assembly/Models.php';
require_once 'Assembly/Controllers.php';
require_once 'Assembly/Main.php';
