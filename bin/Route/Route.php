<?php

namespace Fork\Bin;

class Route{

    public static function Request($path, $class, $method = 'index',$config){
	
	if($path === '/' && $path === $_SERVER['REQUEST_URI']){

	    $GLOBALS['response_class'] = $class;
	    $GLOBALS['response_method'] = $method;
	    $GLOBALS['response_config'] = $config;
	    
	}else if(isset($_SERVER['REDIRECT_URL']) &&
		 $path === $_SERVER['REDIRECT_URL']){
	    
	    $GLOBALS['response_class'] = $class;
	    $GLOBALS['response_method'] = $method;
	    $GLOBALS['response_config'] = $config;
	}
    }
}
