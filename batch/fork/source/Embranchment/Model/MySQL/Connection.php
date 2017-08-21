<?php

namespace Fork\Model\MySQL;

use \Config\DataBaseConfig;

class ConnectionToMySQL {
    
    protected $query = "";

    protected $connection;

    private function __construct(){

	try {
	    
	    $this->connection = new mysqli(DataBase::$Host,
				       DataBase::$User,
				       DataBase::$Password,
				       DataBase::$Database);

	    if (!$this->MySQLi){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
