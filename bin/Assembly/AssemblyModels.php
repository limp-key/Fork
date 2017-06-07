<?php

namespace Fork\Bin\Assembly;

class AssemblyModels{
    public static function search($Model = null){
	$SearchingParameters = 'find ../models/ | grep ".php"';
	exec($SearchingParameters,$Models);

	if(is_null($Model))
	    return $Models;
	else{
	    foreach($Models as $search){
		if($Model == $search)
		    return $Model;
	    }
	    return false;
	}
    }
}
