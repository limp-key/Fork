<?php

namespace Embranchment\Cookie;

trait CookieManipulate{

    public function Write($CookieName,
			  $CookieProperties    = '',
			  $CookieDirectoryPath = '',
			  $CookieSubDomain     = '',
			  $CookieIsSecure      = false) {

	$HttpOnly = false;
	$Expire = 0;
	
	$Make = setcookie ($CookieName,
			   $CookieProperties,
			   $Expire,
			   $CookieDirectoryPath = "",
			   $CookieSubDomain = "",
			   $CookieIsSecure,
			   $HttpOnly);
	
	if($Make){
	    
	    return true;
	    
	} else {
	    
	    return false;
	}
    }


    # Reading single cookie properties
    #
    public function Read($CookieName) {

	if(isset($_COOKIE[$CookieName])){

	    return htmlentities($_COOKIE[$CookieName], ENT_QUOTES);
	} else {

	    return false;
	}
    }

    # Drop cookie
    #
    public function Delete($CookieName) {

	# When deleting a cookie you should assure 
	# that the expiration date is in the past
	#
	# Time 86400 this is 24 hours 
	#
	setcookie($CookieName, "", time()-86400);
    }

    public function Show() {

	if(!empty($_COOKIE)){
	    
	    foreach ($_COOKIE as $Key => &$Value) {
		
		$Cookies[$Key] = htmlentities($Value, ENT_QUOTES);
	    }
	}
	
	return $Cookies;
    }
}
