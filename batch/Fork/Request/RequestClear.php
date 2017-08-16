<?php

namespace Fork\Request;

class RequestClear {

    public static function ENV() {

	# Remove all parameters in $_ENV variable
	if (!empty($_ENV)) {
	    unset($_ENV);
	}

	return true;
    }

    public static function REQUEST() {

	# Remove all parameters in $_REQUEST variable
	if (!empty($_REQUEST)) {
	    unset($_REQUEST);
	}

	return true;
    }

    public static function GLOBALS() {
	
	# Remove all parameters in $_GLOBALS variable
	if (!empty($_GLOBALS)) {
	    unset($_GLOBALS);
	}

	return true;
    }
}
