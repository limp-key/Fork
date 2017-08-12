<?php

namespace Model;

use \Model\CRUD;
use \Model\Other;
use \Model\DataBase;
use \Config\DataBaseConfig;

class SkeletModel{

    use CRUD;
    use Other;
    use DataBase;

    public $Query = "";

    public $MySQLi;

    public function __construct(){
	
	$this->MySQLi = new mysqli(DataBaseConfig::$Host,
				  DataBaseConfig::$User,
				  DataBaseConfig::$Password,
				  DataBaseConfig::$Database);
    }
}
