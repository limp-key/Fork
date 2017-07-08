<?php

namespace Fork\Bin\Assistant;

class ForkException{
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }
}
