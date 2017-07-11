<?php

namespace Fork\Bin;

class Route{

    public static function Request($path, $class, $method = 'index'){
	
	if($path === '/' && $path === $_SERVER['REQUEST_URI']){

	    $GLOBALS['response_class'] = $class;
	    $GLOBALS['response_method'] = $method;
	    
	}else if(isset($_SERVER['REDIRECT_URL']) &&
		 $path === $_SERVER['REDIRECT_URL']){
	    
	    $GLOBALS['response_class'] = $class;
	    $GLOBALS['response_method'] = $method;
	}
    }
}
