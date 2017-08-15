<?php

namespace Fork\Assay;

class Request{

    public function Post(){

	try {
	    
	    # Assay request is post
	    if(!empty($_POST)){
		$Posts = $_POST;
		
		foreach($Posts as &$Post){
		    $Post = htmlentities($Post, ENT_QUOTES);
		}
		return $Posts;
	    }else{
		return null;
	    }
	    
	} catch (\Exception $e) {

	}
    }

    public function Get(){

	try {
	    
	    # Assay request is get
	    if(!empty($_GET)){
		$Gets = $_GET;
		
		foreach($Gets as &$Get){
		    $Get = htmlentities($Get, ENT_QUOTES);
		}
		return $Gets;
	    }else{
		return null;
	    }
	    
	} catch (\Exception $e) {
	    
	}
    }

    public function File($Parameter){

	try {
	    
	    # File exists in request
	    if(empty($_FILES))
		return null;
	    
	    $Files = $_FILES;
	    
	    $File[$Parameter]['name']     = htmlentities($Files[$Parameter]['name'], ENT_QUOTES);
	    
	    $File[$Parameter]['type']     = htmlentities($Files[$Parameter]['type'], ENT_QUOTES);
	    
	    $File[$Parameter]['size']     = htmlentities($Files[$Parameter]['size'], ENT_QUOTES);
	    
	    $File[$Parameter]['tmp_name'] = htmlentities($Files[$Parameter]['tmp_name'], ENT_QUOTES);
	    
	    $File[$Parameter]['byte']     = htmlentities(file_get_contents($Files['userfile']['tmp_name']), ENT_QUOTES);

	    $File[$Parameter]['error']    = htmlentities($Files[$Parameter]['error'], ENT_QUOTES);
	    
	    return $File;

	} catch (\Exception $e) {
	    
	}
    }

    public function Files(){

	try {
	    
	    # Files exists in request
	    if(empty($_FILES))
		return null;
	    
	    $Files = $_FILES;
	    
	    foreach($Files as &$FileProperties){
		foreach($FileProperties as &$Property){
		    $Property = htmlentities($Property, ENT_QUOTES);
		}
	    }
	
	    return $Files;

	} catch (\Exception $e) {
	    
	}
    }
}
