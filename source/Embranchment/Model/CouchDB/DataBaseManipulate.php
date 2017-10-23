<?php

namespace Embranchment\Model\SQLite;

trait DataBaseManipulate {

    public function create_database($TableName) {

	# Assay variable $TableName
	#
  	$TableName = $this->connection->escape_string($TableName);

	# Create database for name $TableName
	#
	$this->query = "CREATE DATABASE $TableName";
    }

    public function drop_database($TableName) {

	# Assay variable $TableName
	#
  	$TableName = $this->connection->escape_string($TableName);
	
	# Delete database for name $TableName
	#
	$this->query = "DROP DATABASE $TableName";
    }
}
