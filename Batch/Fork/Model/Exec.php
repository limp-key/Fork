<?php

namespace Fork\Model;

class Exec{

    public function exec(){
	$returnQuery = $this->MySQLi->query($this->Query);
	
	return $returnQuery;
    }

    public function show(){
	$returnQuery = $this->MySQLi->query($this->Query);

	if(!empty($returnQuery))
	    return $returnQuery->fetch_all(1);
	else
	    return false;
    }

    public function first(){
	
	$this->Query .= "LIMIT 1";
	
	$returnQuery = $this->MySQLi->query($this->Query);

	if(!empty($returnQuery)){
	    $returnQuery = $returnQuery->fetch_all(1);
	    $returnQuery = $returnQuery[0];
	    return $returnQuery;
	}else
	return false;
    }

    public function bool(){

	$this->Query .= "LIMIT 1";
	
	$returnQuery = $this->MySQLi->query($this->Query);
	
	if(!empty($returnQuery))
	    return true;
	else
	    return false;
    }
}
