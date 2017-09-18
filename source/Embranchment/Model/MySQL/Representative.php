<?php

namespace Embranchment\Model\MySQL;

use \Configs\DataBase;
use \Embranchment\Model\MySQL\TraitCollector;

class Representative extends TraitCollector {
    
    protected $query = "";

    protected $connection = false;

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
