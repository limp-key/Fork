<?php

namespace bin\;

class AutoLoad{

    public static function Load(){
	
	\Fork\Bin\Request\Parse::Start();
	
	spl_autoload_register('\Fork\Bin\ForkAutoload::Routes');

	spl_autoload_register('\Fork\Bin\ForkAutoload::Config');

	spl_autoload_register('\Fork\Bin\ForkAutoload::Assembly');

	
	# LEVEL 0 (Parse level)
	# Include Parse, Route, Config classes
	# First parse client Request
	# and Include user's Config in this project
	# and assay Route

	# LEVEL 1 (Skelet level)

	# LEVEL 2 (Assembly level)
	# Include:
	#          User's Models      in models/
	#          User's Controllers in controllers/


	spl_autoload_register('Assembly\Controller::Start()');

	spl_autoload_register('Assembly\Models::Start()');

	spl_autoload_register('Assembly\Config::Start()');

	spl_autoload_register('Assembly\Route::Start()');

	#\Fork\Bin\Assembly\Route::Start();
    }
}

# Run Fork Framework
AutoLoad::Load();
