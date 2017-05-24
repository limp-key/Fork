<?php

namespace limpWork\Model;

class SkeletonModel{

    public function param($parameters = array()){
	for($i = 0; $i < count($parameters); $i++){
	    $parameters[$i] = $MySQLi->escape_string($parameters[$i]);
	}
	
	if(count($parameters) == 1)
	    return $parameters[0];
	else
	    return $parameters;
    }
    
    public function select($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$Query = "SELECT FROM $table";
	$MySQLi->query($Query);
    }

    public function update($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$Query = "UPDATE SET";
	$MySQLi->query($Query);
    }

    public function insert($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$Query = "INSERT INTO $table () VALUES ()";
	$MySQLi->query($Query);
    }

    public function delete($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$Query = "DELETE FROM $table WHERE";
	$MySQLi->query($Query);
    }

    public function create_table($TableName){
	$TableName = $MySQLi->escape_string($TableName);
	$Query = "CREATE DATABASE $TableName";
	$MySQLi->query($Query);
    }
}
