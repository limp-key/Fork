<?php

namespace Fork\Bin\Route;

class Route{
    
    public static function Request($path, $class, $method, $config){
	
	if($path === '/' && $path === $_SERVER['REQUEST_URI']){

	    $_SERVER['REQUEST_CLASS']  = $class;
	    $_SERVER['REQUEST_METHOD'] = $method;
	    $_SERVER['REQUEST_CONFIG'] = $config;

	    return true;
	}

	if(isset($_SERVER['REDIRECT_URL']) &&
		 $path === $_SERVER['REDIRECT_URL']){
	    
	    $_SERVER['REQUEST_CLASS']  = $class;
	    $_SERVER['REQUEST_METHOD'] = $method;
	    $_SERVER['REQUEST_CONFIG'] = $config;
	    
	    return true;
	}

	return false;
    }
}
