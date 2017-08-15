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

	try {
	
	    $this->MySQLi = new mysqli(DataBase::$Host,
				       DataBase::$User,
				       DataBase::$Password,
				       DataBase::$Database);

	    if (!$this->MySQLi){

		throw new \Exception();
	    }

	} catch (\Exception $e) {

	    
	}
    }
}
