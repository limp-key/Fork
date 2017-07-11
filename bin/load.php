<?php

// Zero firewall

require_once 'FireWall/Assay.php';

// Include Parse, Route, Config classes

require_once 'Parse/Request.php';
require_once 'Route/Route.php';

require_once 'Config/Main.php';
require_once 'Config/DataBase.php';
require_once 'Config/Mail.php';

// First parse client Request
// and Include user's Config in this project
// and assay Request to Route

require_once 'Assembly/Request.php';
require_once 'Assembly/Config.php';
require_once 'Assembly/Route.php';

// Second Include framework modules

require_once 'Controller/SkeletonController.php';
require_once 'Model/SkeletonModel.php';

require_once 'Assay/Request.php';
require_once 'Assay/Validation.php';

require_once 'Session/SessionCreate.php';
require_once 'Cookie/CookieCreate.php';

require_once 'Assistant/Help.php';
require_once 'Assistant/Exception.php';

require_once 'CMedia/ConvertMedia.php';

// End trabel for Request.
// Include:
//          User's Models      in models/
//          User's Controllers in controllers/

require_once 'Assembly/Models.php';
require_once 'Assembly/Controllers.php';
require_once 'Assembly/Main.php';
