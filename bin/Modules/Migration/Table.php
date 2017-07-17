<?php

namespace Fork\Bin\Modules\Migration;

trait Table{

    $TableName;
    
    public function Table($Name){

	$this->TableName = $Name;
	
	$this->Query = "CREATE TABLE {$Name}";

	return true;
    }

    
    /*$this->Table("Name",function Column(){
       
       $Column->Int()->Unsigned()->PrimaryKey();
       $Column->Text()->
       $Column->Migrate();
       
       }); */

    public function AddColumn($Name){
	$this->Query = "ALTER TABLE {$this->TableName} ADD {$Name}";
    }

    public function DropColumn($Name){
	$this->Query = "ALTER TABLE {$this->TableName} DROP COLUMN {$Name}";
    }

    public function ModifyColumn($Name){
	$this->Query = "ALTER TABLE {$this->TableName} MODIFY COLUMN {$Name}";
    }
}
