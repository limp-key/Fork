<?php

namespace Embranchment\Model\SQLite;

trait DesiredResponse{

    public function exec(){

	#
	$returnQuery = $this->connection->exec($this->query);

	# Returns the response
	# The request was successful or not
	#
	return $returnQuery;
    }

    public function show(){
	
	$returnQuery = $this->connection->query($this->query);

	if (!empty($returnQuery)) {
	    
	    return $returnQuery->fetchArray(SQLITE3_ASSOC);
	    
	} else {

	    return false;
	}
    }

    public function first(){
	
	$this->query .= "LIMIT 1";
	
	$returnQuery = $this->connection->querySingle($this->query);

	if(!empty($returnQuery)){

	    return $returnQuery;
	    
	} else {

	    return false;
	}
    }
}
