<?php

// Load recurcive all Models in folder /models
$Models = Fork\Bin\Assembly\Models::search();

if(is_array($Models)){
    foreach($Models as $IncludeModel){
	require_once $IncludeModel;
    }
}

// Load recurcive all Controllers in folder /controllers
$Controllers = Fork\Bin\Assembly\Controllers::search();

if(is_array($Controllers)){
    foreach($Controllers as $IncludeController){
	require_once $IncludeController;
    }   
}

//Create object Controller (depending on the request)

// if class is not write
if(empty($GLOBALS['response_class'])){
    Fork\Bin\Assistant\Exception::errorURL();
}

$Controller = 'Fork\\Controllers\\'.$GLOBALS['response_class'];

if($GLOBALS['response_method'])
    $Method = $GLOBALS['response_method'];
else
    $Method = 'index';

unset($GLOBALS);

$AssemblyController = new $Controller();

if($AssemblyController->$Method() == null){
    Fork\Bin\Assistant\Exception::errorURL();
}
