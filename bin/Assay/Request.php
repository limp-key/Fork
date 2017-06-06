<?php

namespace Fork\Bin\Assay;

class Request{

    public function post(){
	if(!empty($_POST)){
	    $posts = $_POST;
	    
	    foreach($posts as &$post){
		$post = htmlentities($post, ENT_QUOTES);
	    }
	    return $posts;
	}else{
	    return null;
	}
    }

    public function get(){
	if(!empty($_GET)){
	    $gets = $_GET;

	    foreach($gets as &$get){
		$get = htmlentities($get, ENT_QUOTES);
	    }
	    return $gets;
	}else{
	    return null;
	}
    }

    public function files(){
	if(!empty($_FILES)){
	    // other time
	}
    }

    public function env(){
	if(!empty($_ENV)){
	    unset($_ENV);
	    //var_dump($_ENV);
	}
	return null;
    }

   
    public function request(){
	if(!empty($_REQUEST)){
	    unset($_REQUEST);
	    //var_dump($_REQUEST);
	}
	return null;
    }
}
