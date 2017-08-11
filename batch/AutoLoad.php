<?php

namespace bin\;

class AutoLoad{

    public static function Fork($ClassName){

	$Assembly = sprintf('Assembly/%s.php',$ClassName);
	
	require_once $Assembly;

	return true;
    }

    public static function Load(){
	
	\Fork\Bin\Request\Parse::Start();

	
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


	
	\Fork\Bin\Assembly\Route::Start();
    }
}

spl_autoload_register('\Fork\Bin\ForkAutoload::Routes');

spl_autoload_register('\Fork\Bin\ForkAutoload::Config');

spl_autoload_register('\Fork\Bin\ForkAutoload::Assembly');

__NAMESPACE__\AutoLoad::Load();
