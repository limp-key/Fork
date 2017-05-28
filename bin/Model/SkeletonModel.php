<?php

namespace limpWork\Model;

require_once 'Other.php';
require_once 'CRUD.php';

use \limpWork\DataBase\Connection;
use \limpWork\Bin\Model\CRUD;
use \limpWork\Bin\Model\Other;
use \mysqli as MySQL;

class SkeletonModel{

    use CRUD, Other;

    public $Query = "";

    public $MySQLi;

    public function __construct(){

	$this->MySQLi = new MySQL($GLOBALS['Host'],
				  $GLOBALS['User'],
				  $GLOBALS['Password'],
				  $GLOBALS['Database']);
    }

   
}
