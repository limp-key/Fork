<?php

namespace Fork\Request;

class Parse{

    public static function Start(){

	if(!empty($_SERVER) &&
	   empty($_SERVER['REDIRECT_URL'])){
	    
	    $_SERVER['REDIRECT_URL'] = substr_replace($_SERVER['REQUEST_URI'],'/',0);
	}

	return true;
    }
}
