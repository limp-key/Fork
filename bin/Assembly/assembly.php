<?php

// load Model and Conrtoller (depending on the request)

if(isset($GLOBALS['response_model'])){
    require_once '../models/'.$GLOBALS['response_model'].'.php';

    $Model = 'Fork\\Models\\'.$GLOBALS['response_model'];

    $AssemblyModel = new $Model();
    //$AssemblyModel->$Method();
}


if(!isset($GLOBALS['response_class'])  &&
   !isset($GLOBALS['response_method'])){
    Fork\Bin\Assistant\ForkException::errorURL();
}

require_once '../controllers/'.$GLOBALS['response_class'].'.php';

$Controller = 'Fork\\Controllers\\'.$GLOBALS['response_class'];

if($GLOBALS['response_method'])
    $Method = $GLOBALS['response_method'];
else
    $Method = 'index';

unset($GLOBALS);

$AssemblyController = new $Controller();

if($AssemblyController->$Method() == null){
    Fork\Bin\Assistant\ForkException::errorURL();
}
