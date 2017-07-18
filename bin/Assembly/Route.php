<?php

namespace Fork\Bin\Assembly;

class Routes{

    public static function Include(){
	$SearchingParameters = 'find ../route/ | grep ".php"';
	
	exec($SearchingParameters,$Route);
	
	if(is_array($Route)){
	    foreach($Route as $IncludeRoute){
		require_once $IncludeRoute;
	    }
	}
    }
}

Routes::Include();
