<?php

namespace Fork\Request;

class Parse{

    public static function Start(){
	
	if(!empty($_ENV)){
	    unset($_ENV);
	}
	
	if(!empty($_REQUEST)){
	    unset($_REQUEST);
	}
	
	if(!empty($_GLOBALS)){
	    unset($_GLOBALS);
	}
	
	if(!empty($_SERVER) &&
	   empty($_SERVER['REDIRECT_URL'])){
	    
	    $_SERVER['REDIRECT_URL'] = substr_replace($_SERVER['REQUEST_URI'],'/',0);
	}	
    }
}
