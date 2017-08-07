<?php

namespace Fork\Bin\Assembly;

class Controllers{

    public static function Start(){	 

	$SearchingParameters = '../controllers/';
	
	if(!is_dir($SearchingParameters)){
	    return false;
	}

	if($DH = opendir($SearchingParameters)){
	    while (($File = readdir($DH)) !== false) {
		if ($File != '..' && $File != '.')
		    $Controllers[] = sprintf('../controllers/%s',$File);
            }
	}
	
        closedir($DH);

	if(!empty($Controllers)){
	    return $Controllers;
	}else{
	    return false;
	}
    }
}
