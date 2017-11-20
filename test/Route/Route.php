<?php

namespace Embranchment\Route;

use \Embranchment\Route\SkeletRoute;

class Route {

    public $List = array();

    public function Add($Path, $Class, $Method){
	
	$this->List[] = [$Path => ['Class' => $Class, 'Method' => $Method]];

	return true;
    }

    public static function Run(){

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
    }
}