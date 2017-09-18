<?php

namespace Embranchment\Model;

use \Embranchment\Model\MySQL\Representative as MySQL;
use \Embranchment\Model\SQLite\Representative as SQLite;
use \Embranchment\Model\PostgreSQL\Representative as PostgreSQL;
use \Embranchment\Model\MongoDB\Representative as MongoDB;

use \Configs\DataBase;

class Connection {

    public function __construct($Driver   = 'MySQL',
				$Host     = 'localhost',
				$UserName = 'root',
				$Password = 'Lamp2comp!',
				$DataBase = 'testfork') {
	
	if ($Driver   == false ||
			 $Host     == false ||
				      $UserName == false ||
						   $Password == false ||
								$DataBase == false) {
	    
	}


	if ($Driver == 'MySQL') {

	    return new MySQL($Host,
		      $UserName,
		      $Password,
		      $DataBase);
	    
	} else if ($Driver == 'SQLite') {
	    
	} else if ($Driver == 'PostgreSQL') {
	    
	} else if ($Driver == 'MongoDB') {
	    
	} else {
	    
	}
    }
}*/
