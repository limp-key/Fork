<?php 

namespace Fork\Controllers;

use \Fork\Bin\Controller\SkeletController;
use \Fork\Bin\Modules\Session;
use \Fork\Bin\Modules\Assay\Request;

use \Fork\Models\BaseModel;

class ForkController extends SkeletController{

    public function index(){
	return $this->view('index.fork.html.php',['message' => 'World']);
    }
}
