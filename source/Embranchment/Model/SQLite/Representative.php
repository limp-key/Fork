<?php

namespace Embranchment\Model\SQLite;

use \Configs\DataBase;
use \Configs\Project;
use \Embranchment\Model\SQLite\TraitCollector;

class Representative extends TraitCollector {
    
    protected $query = "";

    protected $connection = false;

    public function __construct($DataBase = 'DataBase'){

	try {

	    $this->connection = new \SQLite3(Project::$Path.'/pantry/database/'.$DataBase.'.db');
	    
	    if (!$this->connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
