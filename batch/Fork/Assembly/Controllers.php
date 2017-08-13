<?php

namespace Fork/Assembly;

class Controllers{

    public static function ToPlug($NameSpace){	 

	preg_replace('\','/',$NameSpace);

	if(!is_dir($SearchingParameters)){
	    return false;
	}

	$Include  = require_once $Controller;
	
	if( $Include ){
	    return true;
	}else{
	    return false;
	}
    }
}
