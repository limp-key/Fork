<?php

namespace Fork\Bin\Model;

require_once 'Other.php';
require_once 'CRUD.php';

use \Fork\Bin\Model\CRUD;
use \Fork\Bin\Model\Other;
use \Fork\Config\DataBaseConfig;
use \mysqli as MySQL;

class SkeletModel{

    use CRUD, Other;

    public $Query = "";

    public $MySQLi;

    public function __construct(){
	
	$this->MySQLi = new MySQL(DataBaseConfig::$Host,
				  DataBaseConfig::$User,
				  DataBaseConfig::$Password,
				  DataBaseConfig::$Database);
    }
}
