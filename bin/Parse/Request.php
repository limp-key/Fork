<?php

namespace Fork\Bin;

class Request{

    private $Request;

    public function __construct(){

	//echo '<pre>';
	// var_dump($_SERVER);
	// echo '</pre>';

	$this->Request = $_SERVER;

	return $this->Request;
    }

    public function Parse(){

	if(!empty($this->Request) &&
	   empty($this->Request['REDIRECT_URL'])){

	    $this->Request['REDIRECT_URL'] = substr_replace($this->Request['REQUEST_URI'],'/',0);
	}	
    }    
}
