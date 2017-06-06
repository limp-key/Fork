<?php

namespace Fork\Bin\Assay;

class Request{

    public function post(){
	if(!empty($_POST)){
	    foreach ($_POST as &$post) {
		$post = strtoupper($post);
	    }
	} 
	$posts = $POSTS = $_POST;
	
	foreach($posts as $post){
	    echo $post;
	}
    }

    public function get(){
	if(!empty($_GET)){
	    foreach ($_GET as &$get) {
		$get = strtoupper($get);
	    }
	}
	$gets = $GETS = $_GET;

	foreach($gets as $get){
	    echo $get;
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
    }

   
    public function request(){
	if(!empty($_REQUEST)){
	    unset($_REQUEST);
	    //var_dump($_REQUEST);
	}
    }
}
