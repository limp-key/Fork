<?php

namespace Embranchment\Model\MySQL;

use \Embranchment\Model\MySQL\TraitCollector;

class Connection extends TraitCollector {
    
    # Connection to database
    #
    # Fork supported poly-database connection
    # But you can create default connection
    #
    # If the model does not accept the parameters,
    # then the connection will be made according to these settings

    # Fork supports NoSQL servers:
    #
    public static $Port = '0000';

    # DataBase host
    #
    # Host on which the database server is installed
    #
    public static $Host = 'localhost';

    # DataBase user
    #
    # Connection to the user on the database server
    #
    public static $UserName = 'root';

    # DataBase password
    #
    # The password of the user you are connected to
    #
    public static $Password = 'password';
    
    protected $Query = "";

    protected $Connected;

    public function __construct(){

	try {
	    
	    $this->connection = new \mysqli(DataBase::$Host,
					    DataBase::$UserName,
					    DataBase::$Password,
					    DataBase::$DataBase);

	    if (!$this->connection){

		throw new \Exception('Fork did not connect to database');
	    }

	} catch (\Exception $Info) {

	    
	}
    }
}
