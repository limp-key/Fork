<?php 

namespace Fork\Controllers;

use \Fork\Bin\Controller\SkeletonController;
use \Fork\Models\BaseModel;
use \Fork\Bin\Session;

class BaseController extends SkeletonController{

    public function index(){

	$session = new Session('sess');

	$session->write('joy','kill');
	echo $session->read('joy');

	return $this->view('index.html.php',['cruel world']);
    }
}
