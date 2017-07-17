<?php

namespace Fork\Bin\Modules\Migration;

require_once 'Other.php';
require_once 'Base.php';

use \Fork\DataBase\Connection;
use \Fork\Bin\Model\CRUD;
use \Fork\Bin\Model\Other;
use \Fork\Config\Database;
use \mysqli as MySQL;

class SkeletMigration{

    use Table, Database;

    public $Query = "";

    public $MySQLi;

    public function __construct(){

	$Setting = new Database();
	
	$this->MySQLi = new MySQL($Setting->Host,
				  $Setting->User,
				  $Setting->Password,
				  $Setting->Database);
    }

    public function Migrate(){
	$this->MySQLi->query($this->Query);

	return true;
    }
}
