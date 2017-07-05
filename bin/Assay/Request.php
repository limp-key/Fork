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

    public function file($Parameter){
	if(!empty($_FILES)){
	    $files = $_FILES;

	    $_FILES['userfile']['name'];

	    $_FILES['userfile']['type'];
	    
	    $_FILES['userfile']['size'];
	    
	    $_FILES['userfile']['tmp_name'];
	    
	    $_FILES['userfile']['error'];
	    
	    foreach($files as &$file){
		$file = htmlentities($file, ENT_QUOTES);
	    }
	    return $file;
	}else{
	    return null;
	}
    }

    public function files($Parameter){
	if(!empty($_FILES)){
	    $files = $_FILES;

	    $_FILES['userfile']['name'];

	    $_FILES['userfile']['type'];
	    
	    $_FILES['userfile']['size'];
	    
	    $_FILES['userfile']['tmp_name'];
	    
	    $_FILES['userfile']['error'];
	    
	    foreach($files as &$file){
		$file = htmlentities($file, ENT_QUOTES);
	    }
	    return $file;
	}else{
	    return null;
	}
    }

    public function env(){
	if(!empty($_ENV)){
	    unset($_ENV);
	}
	return null;
    }

    
    public function request(){
	if(!empty($_REQUEST)){
	    unset($_REQUEST);
	}
	return null;
    }
}
