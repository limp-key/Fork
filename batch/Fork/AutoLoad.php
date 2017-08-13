<?php

require_once 'Assembly/Assembly.php';

# Load components in {path_to_project}/batch folder
spl_autoload_register('\\Fork\\AutoLoad::Components');

# Load controllers in {path_to_project}/controllers folder
spl_autoload_register('\\Fork\\Assembly\\Controller::Start');

# Load models in {path_to_project}/models folder
spl_autoload_register('\\Fork\\Assembly\\Models::Start');

# Load config in {path_to_project}/config folder
spl_autoload_register('\\Fork\\Assembly\\Config::Start');

# Load route in {path_to_project}/route folder
spl_autoload_register('\\Fork\Assembly\\Route::Start');

# Run Fork Framework
\Fork\Assembly\Assembly::Load();
