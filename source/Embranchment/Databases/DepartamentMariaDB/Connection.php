<?php

namespace Embranchment\Databases\DepartamentMariaDB;

use \Embranchment\Databases\DepartamentMariaDB\TraitCollector;

class Connection extends TraitCollector {
    
    /*
     *
     */
    protected $Query = "";

    /*
     *
     */
    protected $Connection;

    /*
     *
     */
    public function __construct(){

	try {
	    
	    $this->Connection = new \mysqli($this->Host,
					    $this->UserName,
					    $this->Password,
					    $this->DataBase);

	    if (!$this->Connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
