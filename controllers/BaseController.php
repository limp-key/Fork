<?php 

namespace limpWork\Controllers;

use \limpWork\Bin\Controller\SkeletonController;
use \limpWork\Models\BaseModel;

class BaseController extends SkeletonController{

    public function index(){
/*	echo "<pre>";
	var_dump($_SERVER);
   echo "</pre>";*/
	$db = new BaseModel();
	$db->create_database('test');
	$db->exec();
	return $this->view('index.html.php',['cruel world']);
    }
}
