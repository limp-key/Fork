<?php

namespace limpWork\Bin\Controller;

class SkeletonController{

    public function view($path = '/',$parameters = array()){
	include '../views/'.$path;
	return true;
    }

}
