<?php

namespace Embranchment\Databases\DepartamentSQLite;

trait DataBaseManipulate {

    /*
     * Create database
     * 
     * @param TableName
     * 
     * @return void
     */
    public function create_database($TableName) {

  	$TableName = $this->connection->escapeString($TableName);

	$this->query = "CREATE DATABASE $TableName";
    }

    /*
     * Delete database
     *
     * @param TableName
     *
     * @return void
     */
    public function drop_database($TableName) {

  	$TableName = $this->connection->escapeString($TableName);

	$this->query = "DROP DATABASE $TableName";
    }
}
