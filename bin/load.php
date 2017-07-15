<?php

# Level 0 (Parse level)
# Include Parse, Route, Config classes

require_once 'Parse/Request.php';
require_once 'Route/Route.php';

# First parse client Request
# and Include user's Config in this project
# and assay Request to Route

require_once 'Assembly/Request.php';
require_once 'Assembly/Route.php';

require_once 'FireWall/Assay.php';

# Load config files depending on the request

require_once 'Config/Main.php';
require_once 'Config/DataBase.php';
require_once 'Config/Mail.php';

require_once 'Assembly/Config.php';

# Level 1 (Load modules level)
# Include framework modules

require_once 'Modules/Assay/Request.php';
require_once 'Modules/Assay/Validation.php';

require_once 'Modules/Session/SessionCreate.php';
require_once 'Modules/Cookie/CookieCreate.php';

require_once 'Modules/Assistant/Help.php';
require_once 'Modules/Assistant/Exception.php';

require_once 'Modules/CMedia/ConvertMedia.php';

# Level 2 (Assembly level)

# Include:
#          User's Models      in models/
#          User's Controllers in controllers/

require_once 'Controller/SkeletController.php';
require_once 'Model/SkeletModel.php';

require_once 'Assembly/Models.php';
require_once 'Assembly/Controllers.php';
require_once 'Assembly/Main.php';
