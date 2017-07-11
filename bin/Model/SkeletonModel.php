<?php

namespace Fork\Bin\Model;

require_once 'Other.php';
require_once 'CRUD.php';

use \Fork\Bin\Model\CRUD;
use \Fork\Bin\Model\Other;
use \Fork\Config\Database;
use \mysqli as MySQL;

class SkeletonModel{

    use CRUD, Other;

    public $Query = "";

    public $MySQLi;

    public function __construct(){

	$Setting = new Database();
	
	$this->MySQLi = new MySQL($Setting->Host,
				  $Setting->User,
				  $Setting->Password,
				  $Setting->Database);
    }
}
