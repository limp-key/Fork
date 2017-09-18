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
<<<<<<< HEAD

	    \Embranchment\Assembly\AssemblyConfigs::Defaults();
	    
=======
	    
	    \Embranchment\Assembly\AssemblyConfigs::Defaults();
	    
>>>>>>> 17f3806bffb4fc57629f1d9266c204c9535dfdbc
	    if (!\Embranchment\Assembly\AssemblyConfigs::Configs()) {

		throw new \Exception('Error loading custom configs');
	    }
	    
	    # LEVEL 2 (Route level)
	    # Include:
	    #          User's Models      in models/
	    #          User's Controllers in controllers/
	    
	    \Embranchment\Assembly\AssemblyRoutes::Load();

	    throw new \Exception('Embranchment can not find multiple request mappings with custom routers');

	} catch (\Exception $Info) {

	    \Embranchment\Exception\ExceptionService::ExceptionView($Info);
	}
    }
}
