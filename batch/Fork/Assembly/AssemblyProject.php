<?php

namespace Fork\Assembly;

class AssemblyProject{

    public static function Load(){

	try {
	
	    # LEVEL 0 (Parse level)
	    # Include Parse
	    # First parse client Request

	    \Fork\Request\RequestParse::Start();
	    
	    \Fork\Request\RequestClear::ENV();
	    
	    \Fork\Request\RequestClear::GLOBALS();
	    
	    \Fork\Request\RequestClear::REQUEST();
	    
	    
	    # LEVEL 1 (Config level)
	    # load all configs
	    # first load default config
	    # second load user configs

	    \Fork\Assembly\AssemblyConfigs::Defaults();
	    
	    if (!\Fork\Assembly\AssemblyConfigs::Configs()) {

		throw new \Exception('Error loading custom configs');
	    }
	    
	    # LEVEL 2 (Route level)
	    # Include:
	    #          User's Models      in models/
	    #          User's Controllers in controllers/
	    $Route = sprintf('%s/routes/Route.php', \Configs\Project::$Path);
	    
	    require_once $Route;

	    throw new \Exception('Fork can not find multiple request mappings with custom routers');

	} catch (\Exception $Info) {

	    \Fork\Exception\ExceptionService::ExceptionView($Info);
	}
    }
}
