<?php

namespace Fork\Bin\Modules\Assistant;

class Exception{
    
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }

    public static function Error(){
	
    }
}
