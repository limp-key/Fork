<?php

// Load Model (depending on the request)

/*if(isset($GLOBALS['response_model'])){
    require_once '../models/'.$GLOBALS['response_model'].'.php';

    $Model = 'Fork\\Models\\'.$GLOBALS['response_model'];

    //$AssemblyModel = new $Model();
    //$AssemblyModel->$Method();
}else{
    
}*/

// Load recurcive all Models in folder /models
$Models = Fork\Bin\Assembly\AssemblyModels::search();

foreach($Models as $IncludeModel){
    require_once $IncludeModel;
}

// Load recurcive all Controllers in folder /controllers
$Controllers = Fork\Bin\Assembly\AssemblyControllers::search();

foreach($Controllers as $IncludeController){
    require_once $IncludeController;
}

//Create object Controller (depending on the request)

// if class is not write
if(empty($GLOBALS['response_class'])){
    Fork\Bin\Assistant\ForkException::errorURL();
}

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
