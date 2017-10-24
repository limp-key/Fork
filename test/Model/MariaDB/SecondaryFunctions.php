<?php

namespace Embranchment\Model\MySQL;

trait SecondaryFunctions{

    public function param($parameters = array()){
	
	if(is_array($parameters)){

	    for($i = 0; $i < count($parameters); $i++){

		$parameters[$i] = $this->connection->escape_string($parameters[$i]);
	    }
	    
	    if (count($parameters) == 1) {

		return $parameters[0];

	    } else {

		return $parameters;
	    }
	}else{

	    $parameters = $this->connection->escape_string($parameters);

	    return $parameters;
	}
    }

    public function where($parameters){

	$parameters = $this->param($parameters);
	$this->query .= " WHERE $parameters";

	return $this;
    }

    public function query($Request){

	$this->query = $Request;

	return $this;
    }    
}
