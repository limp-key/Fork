<?php

namespace Embranchment\Databases\DepartamentMongoDB;

use \MongoDB\Driver\BulkWrite;
use \MongoDB\Driver\Query;

trait DesiredResponse{

    public function exec($Collection){

	$From = $this->DataBase.'.'.$Collection;
	var_dump($this->Bulk);
	return $this->Connection->executeBulkWrite($From,
						   $this->Bulk);
    }

    public function show($Collection){

	$From = $this->DataBase.'.'.$Collection;
	
	return $this->Connection->executeQuery($From,
					       $this->Query);
    }
}
