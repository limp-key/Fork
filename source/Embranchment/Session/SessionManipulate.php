<?php

namespace Embranchment\Session;

use \Embranchment\Session\SessionVerification as Session;

class SessionManipulate {

    /*
     * Starting session in this request
     */
    public function __construct(){

	if (!Session::IsStarted()) session_start();
    }

    /*
     * Write changes in session variable and close the session
     */
    public function __destruct(){
	
	session_write_close();
    }

    /*
     * Write in session variable
     *
     * @param string
     * @param mix
     *
     * @return bool
     */
    public function write($Session,$Parameter){
	
	$_SESSION[$Session] = $Parameter;

	if ($_SESSION[$Session] === $Parameter) {

	    return true;
	}

	return false;
    }

    /*
     * Read session variable
     *
     * @param
     *
     * @return mix
     */
    public function read($ParametersInSession){

	if (!empty($_SESSION[$ParametersInSession])) {
	    
	    return $_SESSION[$ParametersInSession];
	}

	return false;
    }

    /*
     * Delete all session variables for this request
     */
    public function destroy(){
	
	session_destroy();
    }
}
