<?php 

namespace Fork\Controllers;

use \Fork\Bin\Controller\SkeletonController;
use \Fork\Models\BaseModel;
use \Fork\Bin\Session;
use \Fork\Bin\Assay\Request;

class BaseController extends SkeletonController{

    public function index(){
	return $this->view('index.html.php',['message' => 'World']);
    }
}
