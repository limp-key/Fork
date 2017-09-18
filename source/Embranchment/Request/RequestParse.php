<?php

namespace Embranchment\Request;

class RequestParse {

    public static function Start() {

	if (!empty($_SERVER) && empty($_SERVER['REDIRECT_URL'])) {
	    
	    # Variable REDIRECT_URL undefined, if request is /
	    # Create this variable and save parameter '/' in here
	    # 
	    $_SERVER['REDIRECT_URL'] = '/';
	}

	return true;
    }
}
