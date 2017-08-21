<?php

namespace Fork\Exception;

class ForkException extends \Exception {
    
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }

    public static function ExceptionView($Info){

	# Include template for Fork Exception
	#
	include \Configs\Project::$Path.'/batch/Fork/Template/Exception.html.php';

	# Stop framework, because this is exception
	#
	exit;
    }
}
