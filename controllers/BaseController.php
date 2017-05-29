<?php 

namespace Fork\Controllers;

use \Fork\Bin\Controller\SkeletonController;
use \Fork\Models\BaseModel;

class BaseController extends SkeletonController{

    public function index(){

	//$db = new BaseModel();
	//$db->insert('test',[null,'test text'])->exec();\
//	$kill = $db->select('test',['id','test'])->where('id = 2')->show();
//	var_dump($kill);
	return $this->view('index.html.php',['cruel world']);
    }
}
