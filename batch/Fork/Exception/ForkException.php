<?php

namespace Fork\Modules\Assistant;

class ForkException extends Exception{
    
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }

    public static function Error(){
	
    }
}
