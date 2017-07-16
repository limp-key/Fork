<?php

namespace Fork\Bin;

class Request {

    private $Request;

    public function __construct(){

	//echo '<pre>';
	// var_dump($_SERVER);
	// echo '</pre>';

	$this->Request = $_SERVER;

	return $this->Request;
    }

    public function Parse(){

	if(!empty($_ENV)){
	    unset($_ENV);
	}

	if(!empty($_REQUEST)){
	    unset($_REQUEST);
	}

	if(!empty($this->Request) &&
	   empty($this->Request['REDIRECT_URL'])){

	    $this->Request['REDIRECT_URL'] = substr_replace($this->Request['REQUEST_URI'],'/',0);
	}	
    }    
}


$DataRequest = new Request();

$DataRequest->Parse();
