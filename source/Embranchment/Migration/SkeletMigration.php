<?php

namespace Fork\Modules\Migration;

use \Fork\DataBase\Connection;
use \Fork\Bin\Model\CRUD;
use \Fork\Bin\Model\Other;
use \Fork\Config\DataBase;

class SkeletMigration{

    use Table, Database;

    public $Query = "";

    public $MySQLi;

    public function __construct(){
	
	$this->MySQLi = new MySQL(DataBase::$Host,
				  DataBase::$User,
				  DataBase::$Password,
				  DataBase::$Database);
    }

    public function Migrate(){
	
	$this->MySQLi->query($this->Query);

	return true;
    }
    
    # Example
    
    public function Create($Migrate Migrate){

	$Column->
	$this->Int('ID')->Unsigned()->PrimaryKey()->NotNull();
	$this->Date('DateMessage');
	Migrate::exec('test');
    }

    public function Drop(){
	
	Migrate::drop('test');
    }

    public function Clear(){
	
	Migrate::clear('test');
    }

    public function Content(){
	
	Migrate::content('test',function(){
	    $this->Column('ID','1');
	    $this->Column('Message','hello');
	    $this->Column('TimeWrite','12:30:12');
	});
    }
}
