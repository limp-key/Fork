<?php

namespace Fork\Bin\Route;

class Config{

    public static function Request($Path, $Config){

	if($Path === $_SERVER['REQUEST_URI'] ){

	    include '';
	}
    }
}
