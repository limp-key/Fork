<?php

namespace Embranchment\Routing;

class RouteAssembly {

    /*
     * Create object Controller (depending on the request)
     *
     * @param string
     *
     * @return object
     */
    public static function Controller($Class) {

	$Controller = sprintf('\\Controllers\\%s',$Class);

	return new $Controller(); 
    }

    /*
     * Call methods of an existing controller object
     *
     * @param string
     * @param string
     */
    public static function Method($Controller, $Method) {

	try {

	    $Return = $Controller->$Method();
	    
	    if ($Return == null){

		throw new \Exception('Controller undefined returned');
	    }

	} catch (\Exception $Info) {

	    \Embranchment\Exception\ForkException::ExceptionView($Info);
	}
    }

    /*
     * Create object for controller and call method in the controller 
     *
     * @param array
     */
    public static function Convert($Action) {

	$Class = array_shift($Action);
	$Method = array_shift($Action);
	
	$Controller = RouteAssembly::Controller($Class);
	
	RouteAssembly::Method($Controller, $Method);
    }
}
