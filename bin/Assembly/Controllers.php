<?php

namespace Fork\Bin\Assembly;

class Controllers{

    public static function Includes(){
	
	$SearchingParameters = 'find ../controllers/ | grep ".php"';
	
	exec($SearchingParameters,$Controllers);
	
	if(!empty($Controllers))
	    return $Controllers;
	else
	    return false;	
    }
}
