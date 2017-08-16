<?php

namespace Fork\Route;

trait RouteAssay {

    public function AssayCustomRedirect($Path) {
	
	if( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ){
	    
	    # 
	    return false;
	    
	}else if( $Path !== $_SERVER['REDIRECT_URL'] ){

	    # 
	    return false;	
	}

	return true;
    }
}
