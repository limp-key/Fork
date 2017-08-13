<?php

namespace Fork\Assembly;

class Assembly{

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

	$File = str_replace('\\', '/', $Class);

	$File = sprintf('%s.php', $File);

	if(!is_file($File)){
	    return false;
	}

	require_once '/var/www/limp-key/fork/batch/'.$File;

	return true;
    }
}
