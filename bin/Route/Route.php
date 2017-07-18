<?php

namespace Fork\Bin\Route;

class Route{
    
    public static function Request($path, $class, $method, $config){
	
	if($path === '/' && $path === $_SERVER['REQUEST_URI']){

	    $GLOBALS['REQUEST_CLASS']  = $class;
	    $GLOBALS['REQUEST_METHOD'] = $method;
	    $GLOBALS['REQUEST_CONFIG'] = $config;

	    return true;
	}

	if(isset($_SERVER['REDIRECT_URL']) &&
		 $path === $_SERVER['REDIRECT_URL']){
	    
	    $GLOBALS['REQUEST_CLASS']  = $class;
	    $GLOBALS['REQUEST_METHOD'] = $method;
	    $GLOBALS['REQUEST_CONFIG'] = $config;
	    
	    return true;
	}

	return false;
    }
}
