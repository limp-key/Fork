<?php

namespace limpWork\Model;

use \limpWork\DataBase\Connection;

class SkeletonModel{

    public $Query = "";

  //  public $MySQLi;

    public function __construct(){
//	$MySQLi = new \mysqli($GLOBALS['Host'],
//			      $GLOBALS['User'],
//			      $GLOBALS['Password'],
//			      $GLOBALS['Database']);
    }

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
	$this->Query = "SELECT FROM $table";
    }

    public function update($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$this->Query = "UPDATE SET";
    }

    public function insert($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);

	$quickQuery = "DESC $table";
	$ColumnInTable = $MySQLi->query($quickQuery)->fetch_all(1);
	$ColumnForInsert = array();
	for($increment = 0; $increment < count($ColumnInTable); $increment++){
	    $ColumnForInsert = $ColumnInTable[$increment]['Field'];
	}
	$ColumnForInsert = implode(',',$ColumnForInsert);
	
	$this->Query = "INSERT INTO $table ($ColumnForInsert) VALUES ($parameters)";
    }

    public function delete($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$this->Query = "DELETE FROM $table WHERE";
    }

    public function where($parameters){
	//$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$this->Query .= " WHERE $parameters";
    }

    public function exec(){
	$MySQLi->query($this->Query);
    }

    public function create_database($TableName){
//	echo 'adf';
//	$TableName = $MySQLi->escape_string($TableName);

	$this->Query = "CREATE DATABASE $TableName";
	
    }
}
