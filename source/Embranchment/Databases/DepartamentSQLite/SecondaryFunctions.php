<?php

namespace Embranchment\Databases\DepartamentSQLite;

trait SecondaryFunctions{

    public function param($parameters = array()){
	
	if(is_array($parameters)){

	    for($i = 0; $i < count($parameters); $i++){

		$parameters[$i] = $this->connection->escapeString($parameters[$i]);
	    }
	    
	    if (count($parameters) == 1) {

		return $parameters[0];

	    } else {

		return $parameters;
	    }
	}else{

	    $parameters = $this->connection->escapeString($parameters);

	    return $parameters;
	}
    }

    public function where($parameters){

	$parameters = $this->param($parameters);
	$this->query .= " WHERE $parameters";

	return $this;
    }

    /*
     * Create request string to database
     *
     * @param Request
     *
     * @return this
     */
    public function query($Request){

	$this->Query = $Request;

	return $this;
    }    
}
