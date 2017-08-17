<?php

require_once 'AutoLoadConverter.php';

require_once 'AutoLoadInclude.php';

require_once 'SkeletAutoLoad.php';

require_once 'Types/AutoLoadModules.php';

require_once 'Types/AutoLoadConfigs.php';

# Load framework modules in
# {path_to_project}/batch/Fork folder
#
spl_autoload_register('\\Fork\\AutoLoad\\Types\\AutoLoadModules::ToPlug');

# Load custom config in
# {path_to_project}/configs folder
#
spl_autoload_register('\\Fork\\AutoLoad\\Types\\AutoLoadConfigs::ToPlug');

# Load custom controllers in
# {path_to_project}/controllers folder
#
spl_autoload_register('\\Fork\\AutoLoad\\Types\\AutoLoadControllers::ToPlug');

# Load custom models in
# {path_to_project}/models folder
#
spl_autoload_register('\\Fork\\AutoLoad\\Types\\AutoLoadModels::ToPlug');

# Load custom route in
# {path_to_project}/route folder
#
spl_autoload_register('\\Fork\\AutoLoad\\Types\\AutoLoadRoutes::ToPlug');
