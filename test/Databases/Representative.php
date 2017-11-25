<?php

namespace Embranchment\Model;

use \Configs\DataBase;

class Representative {

    /*
     * Query for the database
     */
    protected $Query = "";

    /*
     * Object of the connection
     */
    protected $Connection = false;

    /*
     *
     */
    public function __construct(){

	try {
	    
	    if (!$this->Connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
