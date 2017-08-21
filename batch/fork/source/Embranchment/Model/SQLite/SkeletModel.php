<?php

namespace Fork\Model\SQLite;

use \Config\DataBaseConfig;

class SkeletModel{

    use Fork\Model\CRUD;
    
    use Fork\Model\Other;
    
    use Fork\Model\DataBase;

    use Fork\Model\Exec;
    
    public $Query = "";

    public $SQLite;

    public function __construct(){

	try {
	
	    $this->SQLite = new SQLite3($DataBaseName);

	    if (!$this->SQLite){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
