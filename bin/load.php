<?php

# LEVEL 0 (FrameWork level)
# Include Parse, Route, Config classes

require_once 'Parse/Request.php';

# First parse client Request
# and Include user's Config in this project
# and assay Route

require_once 'Config/SkeletMainConfig.php';
require_once 'Config/SkeletDataBaseConfig.php';
require_once 'Config/SkeletMailConfig.php';
require_once 'Config/SkeletSystemConfig.php';

require_once 'Route/Config.php';
require_once 'Assembly/Config.php';

# Load modules on framework
require_once 'Assembly/Modules.php';

# LEVEL 1 (Client level)
# Include:
#          User's Models      in models/
#          User's Controllers in controllers/

require_once 'Controller/SkeletController.php';
require_once 'Model/SkeletModel.php';

require_once 'Route/Utilizer.php';

require_once 'Assembly/Models.php';
require_once 'Assembly/Controllers.php';
require_once 'Assembly/Main.php';
