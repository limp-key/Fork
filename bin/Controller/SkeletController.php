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
	
	if(!empty($Parameters))
	    extract($Parameters);

	$View = spritf('%s/views/%s', $ProjectPath, $Path);
	
	include $View;
	
	return true;
    }

    public function redirect($Path = '/'){

	$Redirect = sprintf('Location: %s', $Path);
	
	header($Redirect);
	
	return true;
    }
}
