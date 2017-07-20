<?php

# LEVEL 0 (Parse level)
# Include Parse, Route, Config classes

require_once 'Request/Parse.php';

# First parse client Request
# and Include user's Config in this project
# and assay Route

# LEVEL 1 (Skelet level)

require_once 'Config/SkeletCgiConfig.php';
require_once 'Config/SkeletDataBaseConfig.php';
require_once 'Config/SkeletDateConfig.php';
require_once 'Config/SkeletErrorConfig.php';
require_once 'Config/SkeletFileConfig.conf.php';
require_once 'Config/SkeletMailConfig.php';
require_once 'Config/SkeletMainConfig.php';
require_once 'Config/SkeletOtherConfig.php';
require_once 'Config/SkeletPCREConfig.php';
require_once 'Config/SkeletSessionConfig.php';
require_once 'Config/SkeletSystemConfig.php';
require_once 'Config/SkeletZlibConfig.php';

require_once 'Controller/SkeletController.php';
require_once 'Model/SkeletModel.php';

require_once 'Route/SkeletRoute.php';

# LEVEL 2 (Assembly level)
# Include:
#          User's Models      in models/
#          User's Controllers in controllers/

require_once 'Assembly/Config.php';
require_once 'Assembly/Models.php';
require_once 'Assembly/Controllers.php';
require_once 'Assembly/Main.php';
require_once 'Assembly/Modules.php';
require_once 'Assembly/Juxtaposition.php';

# LEVEL 3 (Juxtaposition Level)
\Fork\Bin\Assembly\Juxtaposition::Start();
