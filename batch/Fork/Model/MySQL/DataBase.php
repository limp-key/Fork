<?php

namespace Fork\Model\MySQL;

trait DataBase{

    public function create_database($TableName){
  	$TableName = $this->MySQLi->escape_string($TableName);
	$this->Query = "CREATE DATABASE $TableName";
    }

    public function drop_database($TableName){
	$TableName = $this->MySQLi->escape_string($TableName);
	$this->Query = "DROP DATABASE $TableName";
    }
}
