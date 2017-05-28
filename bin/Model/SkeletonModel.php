<?php

namespace limpWork\Model;

require_once 'Other.php';
require_once 'CRUD.php';

use \limpWork\DataBase\Connection;
use \limpWork\Bin\Model\CRUD;
use \limpWork\Bin\Model\Other;
use \limpWork\Config\Database;
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
