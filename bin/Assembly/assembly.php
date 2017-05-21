<?php

// load Model and Conrtoller (depending on the request)

if(isset($GLOBALS['response_class'])  &&
   isset($GLOBALS['response_method']) &&
   isset($GLOBALS['response_model'])){
    
    require_once '../models/'.$GLOBALS['response_model'].'.php';

    require_once '../controllers/'.$GLOBALS['response_class'].'.php';
    
    $Class = "limpWork\\Controllers\\".$GLOBALS['response_class'];

    if($GLOBALS['response_method'])
	$Method = $GLOBALS['response_method'];
    else
	$Method = 'index';
    
    $AssemblyClass = new $Class();
    //$AssemblyClass->$Method();
    if($AssemblyClass->$Method() == null){
	die(require_once '../bin/assistant/helper.html');
    }
}else{
    die(require_once '../bin/assistant/helper.html');
}
