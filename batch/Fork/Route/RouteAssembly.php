<?php

namespace Fork\RouteAssembly;

trait RouteAssembly {

    # Create object Controller (depending on the request)
    #
    public function Controller($Class) {
	
	$Controller = sprintf('\\Controllers\\%s',$Class);

	return new $Controller();
    }

    # Call methods of an existing controller object
    #
    public function Method($Controller, $Method) {
	
	if($AssemblyController->$Method() == null){
	    \Fork\Exception\Exception::errorURL();

	    throw new \Exception('Method dont existed');
	}

	return true;

    }
}
