<?php

require_once 'AutoLoadConverter.php';

require_once 'AutoLoadInclude.php';

require_once 'SkeletAutoLoad.php';

require_once 'AutoLoadModules.php';

require_once 'AutoLoadConfigs.php';

require_once 'AutoLoadControllers.php';

require_once 'AutoLoadModels.php';

require_once 'AutoLoadModules.php';

require_once 'AutoLoadRoutes.php';

# Load framework modules in
# {path_to_project}/batch/Fork folder
#
spl_autoload_register('\\AutoLoad\\AutoLoadModules::ToPlug');

# Load custom config in
# {path_to_project}/configs folder
#
spl_autoload_register('\\AutoLoad\\AutoLoadConfigs::ToPlug');

# Load custom controllers in
# {path_to_project}/controllers folder
#
spl_autoload_register('\\AutoLoad\\AutoLoadControllers::ToPlug');

# Load custom models in
# {path_to_project}/models folder
#
spl_autoload_register('\\AutoLoad\\AutoLoadModels::ToPlug');

# Load custom route in
# {path_to_project}/route folder
#
spl_autoload_register('\\AutoLoad\\AutoLoadRoutes::ToPlug');
