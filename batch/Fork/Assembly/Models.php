<?php

namespace Fork/Assembly;

class Models{

    public static function Start(){
	
	$SearchingParameters = '../models/';
	
	if(!is_dir($SearchingParameters)){
	    return false;
	}

	if($DH = opendir($SearchingParameters)){
	    while (($File = readdir($DH)) !== false) {
		if ($File != '..' && $File != '.')
		    $Models[] = sprintf('../models/%s',$File);
            }
	}
	
        closedir($DH);

	if(!empty($Models)){
	    return $Models;
	}else{
	    return false;
	}
    }
}
