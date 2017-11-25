<?php

namespace Embranchment\Databases\DepartamentSQLite;

use \Embranchment\Databases\DepartamentSQLite\TraitCollector;

class Connection extends TraitCollector {
    
    protected $Query = "";

    protected $Connection = false;

    public function __construct(){

	$DataBase = $this->DataBase;

	try {

	    $this->Connection = new \SQLite3(__DIR__.'/../../../../../../../pantry/database/'.$DataBase.'.db');
	    
	    if (!$this->Connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
