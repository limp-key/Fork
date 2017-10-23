<?php

namespace Embranchment\Model\MySQL;

use \Configs\DataBase;
use \Embranchment\Model\MySQL\TraitCollector;

class Connection extends TraitCollector {
    
    protected $query = "";

    protected $connection;

    public function __construct(){

	try {
	    
	    $this->connection = new \mysqli(DataBase::$Host,
				       DataBase::$UserName,
				       DataBase::$Password,
				       DataBase::$DataBase);

	    if (!$this->connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
