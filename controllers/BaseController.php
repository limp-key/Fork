<?php 

namespace limpWork\Controllers;

use \limpWork\Bin\Controller\SkeletonController;

class BaseController extends SkeletonController{

    public function out(){
	echo $this->input();
    }
}
