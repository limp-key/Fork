<?php 

namespace Controllers;

use \Fork\Controller\SkeletController;
use \Fork\Modules\Session;
use \Fork\Modules\Assay\Request;

use \Models\BaseModel;

class ForkController extends SkeletController{

    public function index(){

	return $this->view('index.fork.html.php',['message' => 'World']);
    }
}
