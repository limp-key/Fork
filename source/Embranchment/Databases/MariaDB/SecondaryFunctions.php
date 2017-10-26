<?php

namespace Embranchment\Model\MySQL;

trait SecondaryFunctions{

    /*
     * Create request string to database
     *
     * @param Request
     *
     * @return string
     */
    public function param($Parameters = array()){
	
	if(is_array($Parameters)){

	    for($i = 0; $i < count($Parameters); $i++){

		$Parameters[$i] = $this->Connection->escape_string($Parameters[$i]);
	    }
	    
	    if (count($Parameters) == 1) {

		return $Parameters[0];

	    } else {

		return $Parameters;
	    }
	}
	
	$Parameters = $this->Connection->escape_string($Parameters);
	
	return $Parameters;
    }

    /*
     * Create request string to database
     *
     * @param Parameters
     *
     * @return this
     */
    public function where($Parameters){

	$Parameters = $this->param($Parameters);
	$this->Query .= " WHERE $Parameters";

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
