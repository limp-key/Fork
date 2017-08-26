<?php

namespace Embranchment\Session;

class Session {

    
    public function __construct($SessionName = null){

	if (!is_null($SessionName)) {
	    
	    session_name($SessionName);
	}
	
	session_start();
    }

    public function __destruct(){
	
	session_write_close();
    }

    public function write($Session,$Parameter){
	
	$_SESSION[$Session] = $Parameter;

	if ($_SESSION[$Session] === $Parameter) {

	    # Write variable $Parameter
	    # is successful
	    #
	    return true;

	} else {

	    # Error write variable in session
	    #
	    return false;
	}
    }

    public function read($ParametersInSession){
	
	return $_SESSION[$ParametersInSession];
    }

    public function destroy(){
	
	session_destroy();
    }
}
