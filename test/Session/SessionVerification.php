<?php

namespace Embranchment\Session;

class SessionVerification {

    /*
     * Assay session is started
     *
     * @return bool
     */
    public static function IsStarted() {
	
	if ( version_compare(phpversion(), '5.4.0', '>=') ) {
	    
	    return session_status() === PHP_SESSION_ACTIVE ? true : false;
	    
	} else {
	    
	    return session_id() === '' ? false : true;
	}
	return false;
    }
}
