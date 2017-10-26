<?php

namespace Embranchment\Model\MySQL;

use \Configs\DataBase;
use \Embranchment\Model\MySQL\TraitCollector;

class Representative extends TraitCollector {
    
    protected $Query = "";

    protected $Connection = false;

    public function __construct(){

	try {

	    $this->Connection = new \mysqli(DataBase::$Host,
					    DataBase::$UserName,
					    DataBase::$Password,
					    DataBase::$DataBase);
	    
	    if (!$this->Connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
