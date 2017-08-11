<?php

namespace Assembly;

class Route{

    public static function Start(){
	
	$SearchingParameters = '../route/';
	
	if(!is_dir($SearchingParameters)){
	    return false;
	}

	if($DH = opendir($SearchingParameters)){
	    while (($File = readdir($DH)) !== false) {
		if ($File != '..' && $File != '.'){
		    $Route = sprintf('../route/%s',$File);
		    include $Route;
		}
            }
	}
	
        closedir($DH);

	return true;
    }
}
