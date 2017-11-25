<?php

namespace Embranchment\Databases\DepartamentSQLite;

trait DesiredResponse {

    /*
     *
     */
    public function exec(){
	
	return $this->Connection->exec($this->Query);
    }

    /*
     *
     */
    public function show(){
	
	$returnQuery = $this->Connection->query($this->query);

	if (!empty($returnQuery)) {
	    
	    return $returnQuery->fetchArray(SQLITE3_ASSOC);   
	}

	return false;
    }

    /*
     *
     */
    public function first(){
	
	$this->query .= "LIMIT 1";
	
	$returnQuery = $this->Connection->querySingle($this->query);

	if(!empty($returnQuery)){
	    
	    return $returnQuery;    
	}
	
	return false;
    }
}
