<?php 

namespace limpWork\Controllers;

use \limpWork\Bin\Controller\SkeletonController;

class BaseController extends SkeletonController{

    public function index(){
/*	echo "<pre>";
	var_dump($_SERVER);
	echo "</pre>";*/
	return $this->view('index.php',['cruel world']);
    }
}
