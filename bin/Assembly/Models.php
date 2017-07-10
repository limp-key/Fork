<?php

namespace Fork\Bin\Assembly;

class AssemblyModels{
    public static function search(){
	$SearchingParameters = 'find ../models/ | grep ".php"';
	exec($SearchingParameters,$Models);

	if(!empty($Models))
	    return $Models;
	else
	    return false;
    }
}
