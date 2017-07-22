<?php

namespace Fork\Bin\Assembly;

class Main{

    public static function Start($Class, $Method, $Config){
	
	# Load config
	\Fork\Bin\Assembly\Config::Main($Config);

	# Load all enable modules
	\Fork\Bin\Assembly\Modules::Includes();
	
	# Load recurcive all Models in folder /models
	$Models = \Fork\Bin\Assembly\Models::Includes();
	
	if(is_array($Models)){
	    foreach($Models as $IncludeModel){
		require_once $IncludeModel;
	    }
	}
	
	# Load recurcive all Controllers in folder /controllers
	$Controllers = \Fork\Bin\Assembly\Controllers::Includes();
	
	if(is_array($Controllers)){
	    foreach($Controllers as $IncludeController){
		require_once $IncludeController;
	    }   
	}

	#Create object Controller (depending on the request)
	
	$Controller = 'Fork\\Controllers\\'.$Class;
	
	$AssemblyController = new $Controller();
	
	if($AssemblyController->$Method() == null){
	    \Fork\Bin\Assistant\Exception::errorURL();
	}
    }
}
