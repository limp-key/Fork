<?php

namespace Fork\Bin\Session;

class SessionCreate{
    public function __construct($SessionName = null){

	if(!is_null($SessionName))
	    session_name($SessionName);
	
	session_start();
    }

    public function __destruct(){
	session_destroy();
    }

    public function write($Session,$Parameter){
	$_SESSION[$Session] = $Parameter;
	return true;
    }

    public function read($ParametersInSession){
	return $_SESSION[$ParametersInSession];
    }
}

