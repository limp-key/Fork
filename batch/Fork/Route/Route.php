<?php

namespace Fork\Route;

class Route{
    
    public static function Request($Path, $Class, $Method){

	if( ( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ) ||
	    $Path !== $_SERVER['REDIRECT_URL'] ||
		      $Path !== $_SERVER['REQUEST_URI'] ){
	    
	    return false;
	}

	#Create object Controller (depending on the request)
	
	$Controller = sprintf('\\Controllers\\%s',$Class);

	$AssemblyController = new $Controller();
	
	if($AssemblyController->$Method() == null){
	    \Fork\Exception\Exception::errorURL();

	    return false;
	}

	return true;
    }
}
