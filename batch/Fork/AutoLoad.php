<?php

namespace Fork;

class AutoLoad{

    public static function Load(){

	# LEVEL 0 (Parse level)
	# Include Parse, Route, Config classes
	# First parse client Request
	# and Include user's Config in this project
	# and assay Route
	\Fork\Request\Parse::Start();
	
	# LEVEL 2 (Assembly level)
	# Include:
	#          User's Models      in models/
	#          User's Controllers in controllers/
	\Fork\Assembly\Route::Start();
    }

    public static function Components($Class){

	$File = sprintf('',$Class);
	
	require_once '';

	return true;
    }
}

# Load components in {path_to_project}/batch folder
spl_autoload_register('\\AutoLoad::Components');

# Load controllers in {path_to_project}/controllers folder
spl_autoload_register('\\Assembly\\Controller::Start');

# Load models in {path_to_project}/models folder
spl_autoload_register('\\Assembly\\Models::Start');

# Load config in {path_to_project}/config folder
spl_autoload_register('\\Assembly\\Config::Start');

# Load route in {path_to_project}/route folder
spl_autoload_register('\Assembly\\Route::Start');

# 
spl_autoload_register('\Assembly\\Main::Start');

# Run Fork Framework
AutoLoad::Load();
