<?php

namespace Fork\Request;

class Parse{

    public static function Start(){

	# Variable REDIRECT_URL undefined, if request is /
	# Create this variable and save parameter '/' in here
	# 
	if(!empty($_SERVER) &&
	   empty($_SERVER['REDIRECT_URL'])){
	    
	    $_SERVER['REDIRECT_URL'] = '/';
	}

	return true;
    }
}
