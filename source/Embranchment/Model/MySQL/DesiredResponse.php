<?php

namespace Embranchment\Model\MySQL;

trait DesiredResponse{

    public function exec(){

	#
	$returnQuery = $this->connection->query($this->query);

	# Returns the response
	# The request was successful or not
	#
	return $returnQuery;
    }

    public function show(){
	
	$returnQuery = $this->connection->query($this->query);

	if (!empty($returnQuery)) {
	    
	    return $returnQuery->fetch_all(1);
	    
	} else {

	    return false;
	}
    }

    public function first(){
	
	$this->query .= "LIMIT 1";
	
	$returnQuery = $this->connection->query($this->query);

	if(!empty($returnQuery)){
	    
	    $returnQuery = $returnQuery->fetch_all(1);
	    $returnQuery = $returnQuery[0];

	    return $returnQuery;
	    
	} else {

	    return false;
	}
    }

    public function bool(){

	$this->query .= "LIMIT 1";
	
	$returnQuery = $this->connection->query($this->query);
	
	if (!empty($returnQuery)) {

	    return true;

	} else {

	    return false;
	}
    }
}
