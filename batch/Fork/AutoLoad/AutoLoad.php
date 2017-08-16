<?php



require_once 'SkeletAutoLoad.php';

require_once 'AutoLoadModules.php';

# Load framework modules in
# {path_to_project}/batch/Fork folder
#
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadModules::ToPlug');

# Load custom config in
# {path_to_project}/configs folder
#
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadConfigs::ToPlug');

# Load custom controllers in
# {path_to_project}/controllers folder
#
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadControllers::ToPlug');

# Load custom models in
# {path_to_project}/models folder
#
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadModels::ToPlug');

# Load custom route in
# {path_to_project}/route folder
#
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadRoutes::ToPlug');
