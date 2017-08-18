<?php

namespace Fork\Route;

trait RouteAssay {

    public function AssayCustomRedirect($Path) {
	
	if( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ){

	    # If redirect is undefined and url is not /
	    # then skip this route
	    # 
	    return false;
	    
	}else if( $Path !== $_SERVER['REDIRECT_URL'] ){

	    # If url is not equal this path
	    # then skip this route
	    # 
	    return false;	
	}

	# Return true,
	# if url is equal this path
	#
	return true;
    }
}
