<?php

namespace Embranchment\Databases\DepartamentMariaDB;

trait DesiredResponse{

    /*
     * Execute query string
     *
     * @return bool
     */
    public function exec(){

	$ReturnQuery = $this->Connection;
	$ReturnQuery = $ReturnQuery->query($this->Query);

	return $ReturnQuery;
    }

    /*
     * View result for query string
     *
     * @return mixed
     */
    public function show(){
	
	$ReturnQuery = $this->Connection;
	$ReturnQuery = $ReturnQuery->query($this->Query);
	
	if (!empty($ReturnQuery)) {
	    
	    return $ReturnQuery->fetch_all(1);
	}

	return false;
    }

    /*
     * Return first line query string
     *
     * @param mixed
     */
    public function first(){
	
	$this->Query .= "LIMIT 1";
	
	$ReturnQuery = $this->Connection;
	$ReturnQuery = $ReturnQuery->query($this->Query);

	if(!empty($returnQuery)){
	    
	    $ReturnQuery = $ReturnQuery->fetch_all(1);
	    $ReturnQuery = $ReturnQuery[0];

	    return $ReturnQuery;   
	}

	return false;
    }

    /*
     * Return bool for query string
     * 
     * @param bool
     */
    public function bool(){

	$this->Query .= "LIMIT 1";
	
	$ReturnQuery = $this->Connection;
	$ReturnQuery = $ReturnQuery->query($this->Query);
	
	if (!empty($ReturnQuery)) {

	    return true;
	}

	return false;
    }
}
