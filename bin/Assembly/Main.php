<?php


// Load recurcive all Models in folder /models
$Models = Fork\Bin\Assembly\Models::Include();

if(is_array($Models)){
    foreach($Models as $IncludeModel){
	require_once $IncludeModel;
    }
}

// Load recurcive all Controllers in folder /controllers
$Controllers = Fork\Bin\Assembly\Controllers::Include();

if(is_array($Controllers)){
    foreach($Controllers as $IncludeController){
	require_once $IncludeController;
    }   
}

//Create object Controller (depending on the request)

// if class is not write
if(empty($_SERVER['REQUEST_CLASS'])){
    Fork\Bin\Assistant\Exception::errorURL();
}

$Controller = 'Fork\\Controllers\\'.$_SERVER['REQUEST_CLASS'];

if($_SERVER['REQUEST_METHOD'])
    $Method = $_SERVER['REQUEST_METHOD'];
else
    $Method = 'index';

unset($GLOBALS);

$AssemblyController = new $Controller();

if($AssemblyController->$Method() == null){
    Fork\Bin\Assistant\Exception::errorURL();
}
