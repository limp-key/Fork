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

	    $Config = new AssemblyConfigs();
	    
	    $Config->Run();
	    
	    RequestParse::Start();

	    //RequestClear::Start();

	    $Routes = new AssemblyRoutes();

	    $Routes->Load();

	  //  throw new \Exception('Embranchment can not find multiple request mappings with custom routers');

	} catch (\Exception $Info) {

	    ExceptionService::ExceptionView($Info);
	}
    }
}
