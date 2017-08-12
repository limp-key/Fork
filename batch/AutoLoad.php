<?php

class AutoLoad{

    public static function Load(){

	# LEVEL 0 (Parse level)
	# Include Parse, Route, Config classes
	# First parse client Request
	# and Include user's Config in this project
	# and assay Route
	\Fork\Bin\Request\Parse::Start();

	# LEVEL 1 (Skelet level)
	
	# LEVEL 2 (Assembly level)
	# Include:
	#          User's Models      in models/
	#          User's Controllers in controllers/
	\Fork\Bin\Assembly\Route::Start();
    }

    public static function Components($Class){

	$File = sprintf('',$Class);
	
	require_once '';

	return true;
    }
}

spl_autoload_register('AutoLoad::Components()');
#
spl_autoload_register('Assembly\Controller::Start()');
#
spl_autoload_register('Assembly\Models::Start()');
#
spl_autoload_register('Assembly\Config::Start()');
#
spl_autoload_register('Assembly\Route::Start()');
#
spl_autoload_register('Assembly\Main::Start()');

# Run Fork Framework
AutoLoad::Load();
