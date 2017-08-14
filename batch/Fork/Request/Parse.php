<?php

namespace Fork\Request;

class Parse{

    public static function Start(){

	# Remove all parameters in $_ENV variable
	if(!empty($_ENV)){
	    unset($_ENV);
	}

	# Remove all parameters in $_REQUEST variable
	if(!empty($_REQUEST)){
	    unset($_REQUEST);
	}

	# Remove all parameters in $_GLOBALS variable
	if(!empty($_GLOBALS)){
	    unset($_GLOBALS);
	}

	if(!empty($_SERVER) &&
	   empty($_SERVER['REDIRECT_URL'])){
	    
	    $_SERVER['REDIRECT_URL'] = substr_replace($_SERVER['REQUEST_URI'],'/',0);
	}	
    }
}
