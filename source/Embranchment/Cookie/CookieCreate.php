<?php

namespace Embranchment\Cookie;

use \Embranchment\Cookie\CookieManipulate;

class CookieCreate{

    use Manipulate;

    public $CookieName;

    public $CookiePropeties;

    public $CookieSubDomain;
    
    public $CookieDirectoryPath;
    
    public $CookieIsSecure;
    
    public function __construct($CookieName){
	
	if(!empty($_COOKIE)){

	    foreach ($_COOKIE as &$cookie) {

		$cookie = htmlentities($cookie, ENT_QUOTES);
	    }
	}
	
	return $cookie;
    }
}
