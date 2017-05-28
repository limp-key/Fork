<?php

// load Model and Conrtoller (depending on the request)

if(isset($GLOBALS['response_model'])){
    require_once '../models/'.$GLOBALS['response_model'].'.php';

    $Model = 'limpWork\\Models\\'.$GLOBALS['response_model'];

    $AssemblyModel = new $Model();
    //$AssemblyModel->$Method();
}


if(isset($GLOBALS['response_class'])  &&
   isset($GLOBALS['response_method'])){
    
    require_once '../controllers/'.$GLOBALS['response_class'].'.php';
    
    $Controller = 'limpWork\\Controllers\\'.$GLOBALS['response_class'];

    if($GLOBALS['response_method'])
	$Method = $GLOBALS['response_method'];
    else
	$Method = 'index';

    $Host = $GLOBALS['Host'];
    $User = $GLOBALS['User'];
    $Password = $GLOBALS['Password'];
    $Database = $GLOBALS['Database'];
    unset($GLOBALS);
    $GLOBALS['Host'] = $Host;
    $GLOBALS['User'] = $User;
    $GLOBALS['Password'] = $Password;
    $GLOBALS['Database'] = $Database;
    
    $AssemblyController = new $Controller();
    //$AssemblyClass->$Method();
    if($AssemblyController->$Method() == null){
	die(require_once '../bin/assistant/helper.html');
    }
}else{
    die(require_once '../bin/assistant/helper.html');
}
