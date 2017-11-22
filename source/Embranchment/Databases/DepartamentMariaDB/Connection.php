<?php

namespace Embranchment\Model\MySQL;

use \Embranchment\Model\MySQL\TraitCollector;

class Connection extends TraitCollector {
    
    /*
     *
     */
    protected $Query = "";

    /*
     *
     */
    protected $Connected;

    /*
     *
     */
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
