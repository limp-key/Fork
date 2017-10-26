<?php

namespace Embranchment\Cookie;

trait CookieManipulate{

    /*
     * Write new properies to Cookie variable
     *
     * @param CookieName
     * @param CookieProperies
     * @param CookieDirectoryPath
     * @param CookieSubDomain
     * @param CookieIsSecure
     *
     * @return bool
     */
    public function Write($CookieName,
			  $CookieProperties    = '',
			  $CookieDirectoryPath = '',
			  $CookieSubDomain     = '',
			  $CookieIsSecure      = false) {
	
	$Make = setcookie ($CookieName,
			   $CookieProperties,
			   $Expire = 0,
			   $CookieDirectoryPath = "",
			   $CookieSubDomain = "",
			   $CookieIsSecure,
			   $HttpOnly = false);
	
	if($Make){
	    
	    return true;   
	}
	    
	return false;
    }

    /* 
     * Reading single cookie properties
     *
     * @param CookieName
     *
     * @return mixed
     */
    public function Read($CookieName) {

	if(isset($_COOKIE[$CookieName])){

	    return htmlentities($_COOKIE[$CookieName], ENT_QUOTES);
	}
	
	return false;
    }

    /*
     * Delete Cookie in request
     *
     * When deleting a cookie you should assure 
     * that the expiration date is in the past
     *
     * Time 86400 this is 24 hours 
     * 
     * @param CookieName
     *
     * @return void
     */
    public function Delete($CookieName) {

	setcookie($CookieName, "", time()-86400);
    }

    /*
     * View all properties in Cookie variable
     * and ecraning this properies
     *
     * @return array
     */
    public function Show() {

	if(!empty($_COOKIE)){
	    
	    foreach ($_COOKIE as $Key => &$Value) {
		
		$Cookies[$Key] = htmlentities($Value, ENT_QUOTES);
	    }
	}
	
	return $Cookies;
    }
}
