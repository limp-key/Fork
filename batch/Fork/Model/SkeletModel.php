<?php

namespace Fork\Model;

use \Config\DataBaseConfig;

class SkeletModel{

    use Fork\Model\CRUD;
    
    use Fork\Model\Other;
    
    use Fork\Model\DataBase;

    use Fork\Model\Exec;
    
    public $Query = "";

    public $MySQLi;

    public function __construct(){
	
	$this->MySQLi = new mysqli(DataBaseConfig::$Host,
				   DataBaseConfig::$User,
				   DataBaseConfig::$Password,
				   DataBaseConfig::$Database);
    }
}
