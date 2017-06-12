<?php

namespace Fork\Bin\Controller;

class SkeletonController{

    public function json($Parameters = array()){
	
	if(!empty($Parameters))
	    json_encode($Parameters);
	
	return true;
    }
    
    public function view($Path = '/',$Parameters = array()){
	
	if(!empty($Parameters))
	    extract($Parameters);
	
	include '../views/'.$Path;
	return true;
    }

    public function redirect($Path = '/'){
	header('Location: '.$Path);
	return true;
    }
}
