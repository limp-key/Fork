<?php

namespace Embranchment\Exception;

class ForkException extends \Exception {
    
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }

    public static function ExceptionView($Info){

	# Include template for Fork Exception
	#
	include __DIR__.'/../../../../../../vendor/fork/framework/source/Embranchment/Exception/TemplateException.html.php';

	# Stop framework, because this is exception
	#
	exit;
    }
}
