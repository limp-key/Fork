<?php

namespace Fork\Bin\Assembly;

class AssemblyControllers{
    public static function search($Controller = null){
	$SearchingParameters = 'find ../controllers/ | grep ".php"';
	exec($SearchingParameters,$Controllers);

	if(is_null($Controller))
	    return $Controllers;
	else{
	    foreach($Controllers as $search){
		if($Controller == $search)
		    return true;
	    }
	    return false;
	}
    }
}
