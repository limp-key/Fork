<?php

require_once 'AutoLoad/Modules.php';

# Load components in {path_to_project}/batch/Fork folder
spl_autoload_register('\\Fork\\AutoLoad\\Modules::ToPlug');

# Load config in {path_to_project}/config folder
spl_autoload_register('\\Fork\\AutoLoad\\Configs::ToPlug');

# Load controllers in {path_to_project}/controllers folder
spl_autoload_register('\\Fork\\AutoLoad\\Controllers::ToPlug');

# Load models in {path_to_project}/models folder
spl_autoload_register('\\Fork\\AutoLoad\\Models::ToPlug');

# Load route in {path_to_project}/route folder
spl_autoload_register('\\Fork\\AutoLoad\\Routes::ToPlug');

# Run Fork Framework
\Fork\Assembly\Project::Load();
