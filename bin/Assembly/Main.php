<?php

namespace Fork\Bin\Assembly;

class Main{

    public static function Start($Class, $Method, $Config = ''){
	
	# Load config
	\Fork\Bin\Assembly\Config::Start($Config);

	\Fork\Bin\Assembly\Config::Defaults();

	\Fork\Bin\Assembly\Config::Mains();

	#if (!empty($Config))
	 #   \Fork\Bin\Assembly\Config::Additionals($Config);

	#phpinfo();

	# Load all enable modules
	\Fork\Bin\Assembly\Modules::Start();
	
	# Load recurcive all Models in folder /models
	$Models = \Fork\Bin\Assembly\Models::Start();
	
	if(is_array($Models)){
	    foreach($Models as $IncludeModel){
		require_once $IncludeModel;
	    }
	}
	
	# Load recurcive all Controllers in folder /controllers
	$Controllers = \Fork\Bin\Assembly\Controllers::Start();
	
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
