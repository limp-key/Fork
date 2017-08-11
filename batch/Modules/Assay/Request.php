<?php

namespace Fork\Bin\Modules\Assay;

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
    }

    public function Files(){
	
	if(empty($_FILES))
	    return null;
	    	
	$Files = $_FILES;
	
	foreach($Files as &$FileProperties){
	    foreach($FileProperties as &$Property){
		$Property = htmlentities($Property, ENT_QUOTES);
	    }
	}
	
	return $Files;
    }
}
