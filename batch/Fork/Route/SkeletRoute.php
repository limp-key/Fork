<?php

namespace Fork\Route;

use Fork\Assembly\Main as AssemblyMain;

class SkeletRoute{
    
    public static function Request($Path, $Class, $Method, $Config){

	if( ( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ) ||
	    $Path !== $_SERVER['REDIRECT_URL'] ||
		      $Path !== $_SERVER['REQUEST_URI'] ){
	    
	    return false;
	}
	
	# Load config
	\Fork\Assembly\Config::Start($Config);

	\Fork\Assembly\Config::Defaults();

	\Fork\Assembly\Config::Mains();

	if (!empty($Config))
	    \Fork\Assembly\Config::Additionals($Config);

	#phpinfo();

	#Create object Controller (depending on the request)
	
	$Controller = sprintf('\\Controllers\\%s',$Class);
	
	$AssemblyController = new $Controller();
	
	if($AssemblyController->$Method() == null){
	    \Fork\Assistant\Exception::errorURL();
	}
    }
}
