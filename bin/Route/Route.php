<?php

namespace Fork\Bin\Route;

use \Fork\Bin\Assembly\Config;

class Route{
    
    public static function Request($Path, $Class, $Method){
	
	if(($Path === '/' && $Path === $_SERVER['REQUEST_URI']) ||
	   (isset($_SERVER['REDIRECT_URL']) && $Path === $_SERVER['REDIRECT_URL'])){
	    
	    #Config::Include($config);
	    
	    // Load recurcive all Models in folder /models
	    $Models = Fork\Bin\Assembly\Models::Include();
	    
	    if(is_array($Models)){
		foreach($Models as $IncludeModel){
		    require_once $IncludeModel;
		}
	    }
	    
	    // Load recurcive all Controllers in folder /controllers
	    $Controllers = Fork\Bin\Assembly\Controllers::Include();
	    
	    if(is_array($Controllers)){
		foreach($Controllers as $IncludeController){
		    require_once $IncludeController;
		}   
	    }

	    //Create object Controller (depending on the request)
	    
	    $Controller = 'Fork\\Controllers\\'.$Class;
	    
	    $AssemblyController = new $Controller();
	    
	    if($AssemblyController->$Method() == null){
		Fork\Bin\Assistant\Exception::errorURL();
	    }
	    exit;
	}
	return false;
    }
}
