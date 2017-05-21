<?php

namespace limpWork\Bin;

class Route{

    public static function request($path, $class, $method = 'index', $model = ''){
	if($path === '/' && $path === $_SERVER['REQUEST_URI']){
	    $GLOBALS['response_class'] = $class;
	    $GLOBALS['response_method'] = $method;
	    if($model != '')
		$GLOBALS['response_model'] = $model;
	    
	}else if(isset($_SERVER['REDIRECT_URL']) &&
		 $path === $_SERVER['REDIRECT_URL']){
	    
	    $GLOBALS['response_class'] = $class;
	    $GLOBALS['response_method'] = $method;
	    if($model != '')
		$GLOBALS['response_model'] = $model;
	}
    }
}
