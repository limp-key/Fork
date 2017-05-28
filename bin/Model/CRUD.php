<?php

namespace limpWork\Bin\Model;

trait CRUD{
    
    public function insert($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);

	$quickQuery = "DESC $table";
	$ColumnInTable = $this->MySQLi->query($quickQuery)->fetch_all(1);
	$ColumnForInsert = array();
	for($increment = 0; $increment < count($ColumnInTable); $increment++){
	    $ColumnForInsert[$increment] = $ColumnInTable[$increment]['Field'];
	}
	$ColumnForInsert = implode(',',$ColumnForInsert);

	$parameters = implode(',',$parameters);
	$this->Query = "INSERT INTO $table ($ColumnForInsert) VALUES (null,'test')";
	return $this;
    }
    
    public function select($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$this->Query = "SELECT $parameters FROM $table";
	return $this;
    }

    public function delete($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$this->Query = "DELETE FROM $table";
	
	return $this;
    }

    public function update($table, $parameters = array()){
	$table = $this->param([$table]);
	$parameters = $this->param($parameters);
	$this->Query = "UPDATE SET";
    }
}
