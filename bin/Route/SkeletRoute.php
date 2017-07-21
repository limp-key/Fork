<?php

namespace Fork\Bin\Route;

use \Fork\Bin\Assembly\Main as AssemblyMain;

class SkeletRoute{
    
    public static function Request($Path, $Class, $Method, $Config){

	if( ( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ) ||
	    $Path !== $_SERVER['REDIRECT_URL'] ||
		      $Path !== $_SERVER['REQUEST_URI'] ){
	    
	    return false;
	}
	
	AssemblyMain::Start($Class, $Method, $Config);
    }
}
