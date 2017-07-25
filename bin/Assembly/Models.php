<?php

namespace Fork\Bin\Assembly;

class Models{

    public static function Start(){
	
	$SearchingParameters = 'find ../models/ | grep ".php"';

	exec($SearchingParameters,$Models);
	
	if(!empty($Models))
	    return $Models;
	else
	    return false;
    }
}
