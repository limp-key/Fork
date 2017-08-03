<?php

namespace Fork\Bin\Controller;

use \Fork\Bin\Modules\Assistant\Help;
use \Fork\Bin\Request;

class SkeletController{

    public function json($Parameters = array()){
	
	if(!empty($Parameters))
	    return json_encode($Parameters);
	else
	    return false;
    }
    
    public function view($Path, $Parameters = array()){
	
	/*$Variables = array_keys(get_defined_vars());
	for ($Interation = 0; $Interation < sizeOf($Variables); $Interation++){
	    
	    unset($$Variables[$Interation]);
	}
	   unset($Variables,$Interation);*/
	
	if(!empty($Parameters))
	    extract($Parameters);
	
	$View = sprintf('%s/views/%s', \Fork\Config\MainConfig::$ProjectPath, $Path);
	
	require_once $View;
	
	return true;
    }

    public function redirect($Path = '/'){

	$Redirect = sprintf('Location: %s', $Path);
	
	header($Redirect);
	
	return true;
    }
}
