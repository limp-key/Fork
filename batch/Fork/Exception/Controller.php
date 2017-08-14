<?php

namespace Fork\Exception;

class Controller{

    public static function NotFound(){
	
	include 'Exception/NotFound.html.php';
	
	return true;
    }
}
