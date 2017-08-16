<?php

namespace Fork\Route;

use \Fork\Route\SkeletRoute;

class Route extends SkeletRoute {
    
    public static function Request($Path, $Class, $Method){

	$Assay = $this->AssayCustomRedirect($Path);

	if ($Assay) {

	    # If request not route path
	    # skip this route
	    #
	    return false;
	}

	# Create custom object controller
	#
	$Controller = $this->AssemblyRouteController($Class);

	# Call method
	#
	$this->AssemblyRouteMethod($Controller, $Method);

	return true;
    }
}
