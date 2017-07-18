<?php

namespace Fork\Bin\Modules\Migration;

require_once 'Other.php';
require_once 'Base.php';

use \Fork\DataBase\Connection;
use \Fork\Bin\Model\CRUD;
use \Fork\Bin\Model\Other;
use \Fork\Config\Database;
use \mysqli as MySQL;

class SkeletMigration{

    use Table, Database;

    public $Query = "";

    public $MySQLi;

    public function __construct(){

	$Setting = new Database();
	
	$this->MySQLi = new MySQL($Setting->Host,
				  $Setting->User,
				  $Setting->Password,
				  $Setting->Database);
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
