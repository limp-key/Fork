<?php

namespace Fork\Bin\Cookie;

class CookieCreate{

    public function __construct(){
	if(!empty($_COOKIE)){
	    foreach ($_COOKIE as &$cookie) {
		$cookie = strtoupper($cookie);
	    }
	}
    }
}
