<?php

namespace Fork\Route;

trait RouteAssembly {

    # Create object Controller (depending on the request)
    #
    public function Controller($Class) {

	# Convert custom class(controller) name
	# to class(controller) namespace
	#
	$Controller = sprintf('\\Controllers\\%s',$Class);

	# Return object controller
	#
	return new $Controller();
    }

    # Call methods of an existing controller object
    #
    public function Method($Controller, $Method) {

	try {
	    
	    # Call custom method
	    #
	    $Return = $Controller->$Method();
	    
	    if ($Return == null){
		
		throw new \Exception('Controller undefined returned');
	    }
	    
	    return true;

	} catch (\Exception $Info) {

	    \Fork\Exception\ForkException::ExceptionView($Info);
	}
    }
}
