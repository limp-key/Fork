<?php

namespace Fork\Route;

use \Fork\Route\SkeletRoute;

class Route extends SkeletRoute {
    
    public static function Request($Path, $Class, $Method){

	$Assay = self::AssayCustomRedirect($Path);
	
	if (!$Assay) {

	    # If request not route path
	    # skip this route
	    #
	    return false;
	}

	# Create custom object controller
	#
	$Controller = self::Controller($Class);

	# Call method
	#
	self::Method($Controller, $Method);

	return true;
    }
}
