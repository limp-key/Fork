<?php

require_once 'Assembly/Modules.php';

# Load components in {path_to_project}/batch folder
spl_autoload_register('\\Fork\\Assembly\\Modules::ToPlug');

# Load controllers in {path_to_project}/controllers folder
spl_autoload_register('\\Fork\\Assembly\\Controllers::ToPlug');

# Load models in {path_to_project}/models folder
spl_autoload_register('\\Fork\\Assembly\\Models::ToPlug');

# Load config in {path_to_project}/config folder
spl_autoload_register('\\Fork\\Assembly\\Configs::ToPlug');

# Load route in {path_to_project}/route folder
spl_autoload_register('\\Fork\\Assembly\\Routes::ToPlug');

# Run Fork Framework
\Fork\Assembly\Main::Load();
