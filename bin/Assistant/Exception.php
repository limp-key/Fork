<?php

namespace Fork\Bin\Assistant;

class Exception{
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }
}
