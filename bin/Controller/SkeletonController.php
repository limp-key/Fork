<?php

namespace limpWork\Bin\Controller;

class SkeletonController{

    public function json($parameters){
	return true;
    }
    
    public function view($path = '/',$parameters = array()){
	include '../views/'.$path;
	return true;
    }

}
