<?php

namespace Fork\Route;

use \Fork\Route\RouteAssay;
use \Fork\Route\RouteAssembly;

class SkeletRoute {

    use RouteAssay;

    use RouteAssembly;

    public static function Request($Path, $Class, $Method){

	$Assay = self::AssayCustomRedirect($Path);
	
	if (!$Assay) {

	    # If request is not equal route
	    # skip this route and run next custom route
	    # if this is last route then fork create exception
	    #
	    return false;
	}

	# Create custom object controller
	#
	$Controller = self::Controller($Class);

	# Call method
	#
	self::Method($Controller, $Method);

	# End of request processing
	# End work of the framework and user code
	#
	exit;
    }
}
