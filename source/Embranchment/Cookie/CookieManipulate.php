<?php
<<<<<<< HEAD
namespace Embranchment\Cookie;
trait CookieManipulate{
=======

namespace Embranchment\Cookie;

trait CookieManipulate{

>>>>>>> 17f3806bffb4fc57629f1d9266c204c9535dfdbc
    public function Write($CookieName,
			  $CookieProperties    = '',
			  $CookieDirectoryPath = '',
			  $CookieSubDomain     = '',
			  $CookieIsSecure      = false) {
<<<<<<< HEAD
	$HttpOnly = false;
	$Expire = 0;
	
	$Make = setcookie ($CookieName,
			   $CookieProperties,
			   $Expire,
			   $CookieDirectoryPath = "",
			   $CookieSubDomain = "",
			   $CookieIsSecure,
			   $HttpOnly);
	
=======

	$HttpOnly = false;
	$Expire = 0;
	
	$Make = setcookie ($CookieName,
			    $CookieProperties,
			    $Expire,
			    $CookieDirectoryPath = "",
			    $CookieSubDomain = "",
			    $CookieIsSecure,
			    $HttpOnly);
	
>>>>>>> 17f3806bffb4fc57629f1d9266c204c9535dfdbc
	if($Make){
	    
	    return true;
	    
	} else {
	    
	    return false;
	}
    }
<<<<<<< HEAD
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
=======

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

>>>>>>> 17f3806bffb4fc57629f1d9266c204c9535dfdbc
	# When deleting a cookie you should assure 
	# that the expiration date is in the past
	#
	# Time 86400 this is 24 hours 
	#
	setcookie($CookieName, "", time()-86400);
<<<<<<< HEAD
    }
    public function Show() {
	if(!empty($_COOKIE)){
	    
	    foreach ($_COOKIE as $Key => &$Value) {
		
		$Cookies[$Key] = htmlentities($Value, ENT_QUOTES);
	    }
	}
	
	return $Cookies;
    }
=======
    }

    public function Show() {

	if(!empty($_COOKIE)){
	    
	    foreach ($_COOKIE as $Key => &$Value) {
		
		$Cookies[$Key] = htmlentities($Value, ENT_QUOTES);
	    }
	}
	
	return $Cookies;
    }
>>>>>>> 17f3806bffb4fc57629f1d9266c204c9535dfdbc
}
