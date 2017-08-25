<?php

namespace Embranchment\Assembly;

class AssemblyProject{

    public static function Load(){

	try {
	
	    # LEVEL 0 (Parse level)
	    # Include Parse
	    # First parse client Request

	    \Embranchment\Request\RequestParse::Start();
	    
	    \Embranchment\Request\RequestClear::ENV();
	    
	    \Embranchment\Request\RequestClear::GLOBALS();
	    
	    \Embranchment\Request\RequestClear::REQUEST();
	    
	    
	    # LEVEL 1 (Config level)
	    # load all configs
	    # first load default config
	    # second load user configs

	    \Embranchment\Assembly\AssemblyConfigs::Defaults();
	    
	    if (!\Embranchment\Assembly\AssemblyConfigs::Configs()) {

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

	    \Embranchment\Exception\ExceptionService::ExceptionView($Info);
	}
    }
}
