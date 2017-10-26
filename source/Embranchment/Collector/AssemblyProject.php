<?php

namespace Embranchment\Assembly;

use \Embranchment\Request\RequestParse;
use \Embranchment\Request\RequestClear;
use \Embranchment\Assembly\AssemblyConfigs;
use \Embranchment\Assembly\AssemblyRoutes;
use \Embranchment\Exception\ExceptionService;

class AssemblyProject{

    /*
     * 
     */
    public static function Load(){
	
	try {
	    /*
	     * LEVEL 0 (Parse level)
	     * Include Parse
	     * First parse client Request
	     */
	    RequestParse::Start();

	    RequestClear::ENV();
	    
	    RequestClear::GLOBALS();
	    
	    RequestClear::REQUEST();
	    
	    /*
	     * LEVEL 1 (Config level)
	     * load all configs
	     * first load default config
	     * second load user configs
	     */
	    AssemblyConfigs::Defaults();
	    
	    if (!AssemblyConfigs::Configs()) {

		throw new \Exception('Error loading custom configs');
	    }
	    
	    /* LEVEL 2 (Route level)
	     * Include:
	     *          User's Models      in models/
	     *          User's Controllers in controllers/
	     */
	    AssemblyRoutes::Load();

	    throw new \Exception('Embranchment can not find multiple request mappings with custom routers');

	} catch (\Exception $Info) {

	    ExceptionService::ExceptionView($Info);
	}
    }
}
