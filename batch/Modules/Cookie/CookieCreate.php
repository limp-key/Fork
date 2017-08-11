<?php

namespace Fork\Bin\Modules\Cookie;

class CookieCreate{

    public function __construct(){
	if(!empty($_COOKIE)){
	    foreach ($_COOKIE as &$cookie) {
		$cookie = htmlentities($cookie, ENT_QUOTES);
	    }
	}
	return $cookie;
    }

    public function cookie(){
	//setcookie();
    }

    public function cookieraw(){
	//setrawcookie();
    }
}
