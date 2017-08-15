<?php

namespace Fork\Route;

class Route{
    
    public static function Request($Path, $Class, $Method){

	try{

	    #
	    if( empty($_SERVER['REDIRECT_URL']) && $Path !== '/' ){
		
		throw new \Exception('Invalid URL path');
		
	    }else if( $Path !== $_SERVER['REDIRECT_URL'] ){

		throw new \Exception('Invalid URL path');
		
	    }else if( $Path !== $_SERVER['REQUEST_URI'] ){

		throw new \Exception('Invalid URL path');
		
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
	    
	    echo 'Exception: code = ',  $e->getCode(), "\n";

	}
    }
}
