<?php

namespace Fork\Bin\Assay;

class Request{

    public function Post(){
	if(!empty($_POST)){
	    $Posts = $_POST;
	    
	    foreach($Posts as &$Post){
		$Post = htmlentities($Post, ENT_QUOTES);
	    }
	    return $Posts;
	}else{
	    return null;
	}
    }

    public function Get(){
	if(!empty($_GET)){
	    $Gets = $_GET;

	    foreach($Gets as &$Get){
		$Get = htmlentities($Get, ENT_QUOTES);
	    }
	    return $Gets;
	}else{
	    return null;
	}
    }

    public function File($Parameter){
	if(!empty($_FILES)){
	    $Files = $_FILES;

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

    public function Files($Parameter){
	if(!empty($_FILES)){
	    $Files = $_FILES;

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
	return null;
    }

    
    public function request(){
	return null;
    }
}
