<?php

namespace Fork\Modules\Assistant;

class ForkException extends Exception{
    
    public static function errorURL(){
	require_once '../bin/Helper/helper.html';
	exit;
    }

    public static function Error(){
	    echo "<div style='font-family:Helvetica'>";
	    echo "<h3>Fork Exception</h3>";
	    echo "<pre>";
	    echo "<h4>Message</h4>: ";
	    var_dump($e->getMessage());        // message of exception
	    echo "<br>";
	    echo "<h4>Code</h4>: ";
	    var_dump($e->getCode());           // code of exception
	    echo "<br>";
	    echo "<h4>File</h4>: ";
	    var_dump($e->getFile());           // source filename
	    echo "<br>";
	    echo "<h4>Line</h4>: ";
	    var_dump($e->getLine());           // source line
	    echo "<br>";
	    echo "<h4>Trace</h4>: ";
	    var_dump($e->getTrace());          // an array of the backtrace()
	    echo "<br>";
	    echo "<h4>Previous</h4>: ";
	    var_dump($e->getPrevious());       // previous exception
	    echo "<br>";
	    echo "<h4>Trace as string</h4>: ";
	    var_dump($e->getTraceAsString());  // formatted string of trace
	    echo "</pre>";
	    echo '</div>';
	
    }
}
