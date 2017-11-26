<?php

namespace Embranchment\Databases\DepartamentMongoDB;

use \Embranchment\Databases\DepartamentMongoDB\TraitCollector;
use \MongoDB\Driver\Manager as MongoDB;

class Connection extends TraitCollector {
    
    /*
     *
     */
    protected $Bulk = "";

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

	$Options = array();
	
	try {
	    
	    $this->Connection = new MongoDB("mongodb://{$this->Host}:{$this->Port}",
					    $Options);
	    
	    if (!$this->Connection) throw new \Exception('Fork did not connect to database');
	    
	} catch (\Exception $Info) {
	    
	    
	}
    }
}
