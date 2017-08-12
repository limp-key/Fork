<?php

namespace Fork/Assembly;

class Main{

    public static function Start($Class, $Method, $Config = ''){
	# Load config
	Assembly\Config::Start($Config);

	Assembly\Config::Defaults();

	Assembly\Config::Mains();

	if (!empty($Config))
	    Assembly\Config::Additionals($Config);

	#phpinfo();

	#Create object Controller (depending on the request)
	
	$Controller = sprintf('\\Controllers\\%s',$Class);
	
	$AssemblyController = new $Controller();
	
	if($AssemblyController->$Method() == null){
	    Assistant\Exception::errorURL();
	}
    }
}
