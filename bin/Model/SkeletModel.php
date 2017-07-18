<?php

namespace Fork\Bin\Model;

require_once 'Other.php';
require_once 'CRUD.php';

use \Fork\Bin\Model\CRUD;
use \Fork\Bin\Model\Other;
use \Fork\Config\DataBase;
use \mysqli as MySQL;

class SkeletModel{

    use CRUD, Other;

    public $Query = "";

    public $MySQLi;

    public function __construct(){
	
	$this->MySQLi = new MySQL(DataBase::$Host,
				  DataBase::$User,
				  DataBase::$Password,
				  DataBase::$Database);
    }
}
