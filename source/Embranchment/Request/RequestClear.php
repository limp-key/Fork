<?php

namespace Embranchment\Request;

class RequestClear {

    /*
     * Remove all parameters in $_ENV variable
     *
     * @return null
     */
    public static function ENV() {
	
	if (!empty($_ENV)) {

	    unset($_ENV);
	}

	return null;
    }

    /*
     * Remove all parameters in $_REQUEST variable
     *
     * @return null
     */
    public static function REQUEST() {

	
	if (!empty($_REQUEST)) {

	    unset($_REQUEST);
	}

	return null;
    }

    /*
     * Remove all parameters in $_GLOBALS variable
     *
     * @return null
     */
    public static function GLOBALS() {
	

	if (!empty($_GLOBALS)) {

	    unset($_GLOBALS);
	}

	return null;
    }


    /*
     * Star clearing variables;
     */
    public static function Load() {

	self::ENV();

	self::REQUEST();

	self::GLOBALS();
    }
}
