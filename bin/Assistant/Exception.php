<?php

namespace Fork\Bin\Assistant;

class ForkException{
    public static function errorURL(){
	require_once '../bin/Assistant/HelperFile/helper.html';
	exit;
    }
}
