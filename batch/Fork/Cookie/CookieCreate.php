<?php

namespace Fork\Cookie;

class CookieCreate{

    public $CookieName;

    public $CookiePropeties;

    public $CookieSubDomain;
    
    public $CookieDirectoryPath;
    
    public $CookieIsSecure;

    use \Fork\Cookie\CookieManipulate;
    
    public function __construct($CookieName){
	
	if(!empty($_COOKIE)){

	    foreach ($_COOKIE as &$cookie) {

		$cookie = htmlentities($cookie, ENT_QUOTES);
	    }
	}
	
	return $cookie;
    }
}
