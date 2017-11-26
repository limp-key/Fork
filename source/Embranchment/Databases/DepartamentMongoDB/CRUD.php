<?php

namespace Embranchment\Databases\DepartamentMongoDB;

use \MongoDB\Driver\BulkWrite;
use \MongoDB\Driver\Query;

trait CRUD{
    
    public function insert($Parameters = array()){

	$Bulk = new BulkWrite();

	$Bulk->insert($Parameters);
	
	$this->Bulk = $Bulk;

	return $this;
    }
    
    public function select($Filter = array(),
			   $Options = array()){
	
	$this->Query = new Query($Filter, $Options);

	return $this;
    }

    public function delete($Parameters = array(),
			   $Options = array()){

	$Bulk = new BulkWrite();

	$Bulk->delete($Parameters, $Options);
	
	$this->Bulk = $Bulk;

	return $this;
    }

    public function update($Filter = array(),
			   $Date = array(),
			   $Options = array()){
	
	$Bulk = new BulkWrite();

	$Bulk->update($Filter, $Date, $Options);
	
	$this->Bulk = $Bulk;

	return $this;
    }
}
