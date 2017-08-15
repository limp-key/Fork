<?php

namespace Fork\Route;

class Route{
    
    public static function Request($Path, $Class, $Method){

	try{
	    
	    if( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ){

		# 
		return false;
		
	    }else if( $Path !== $_SERVER['REDIRECT_URL'] ){

		# 
		return false;	
	    }

	    #Create object Controller (depending on the request)
	    
	    $Controller = sprintf('\\Controllers\\%s',$Class);

	    $AssemblyController = new $Controller();
  
	    if($AssemblyController->$Method() == null){
		\Fork\Exception\Exception::errorURL();

		throw new \Exception('Method dont existed');
	    }

	    return true;

	}  catch (\Exception $e) {
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
}
