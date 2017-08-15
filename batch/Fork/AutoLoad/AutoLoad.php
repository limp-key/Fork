<?php

require_once 'SkeletAutoLoad.php';

require_once 'AutoLoadModules.php';

# Load components in {path_to_project}/batch/Fork folder
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadModules::ToPlug');

# Load config in {path_to_project}/config folder
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadConfigs::ToPlug');

# Load controllers in {path_to_project}/controllers folder
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadControllers::ToPlug');

# Load models in {path_to_project}/models folder
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadModels::ToPlug');

# Load route in {path_to_project}/route folder
spl_autoload_register('\\Fork\\AutoLoad\\AutoLoadRoutes::ToPlug');
