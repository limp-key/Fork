<?php

namespace Fork\Exception;

class ControllerException extends Exception{

    public static function NotFound(){
	
	include 'Exception/NotFound.html.php';
	
	return true;
    }
}
