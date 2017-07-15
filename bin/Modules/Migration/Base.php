<?php

namespace Fork\Bin\Modules\Migration;

trait Base{
    
    public function Table($Name){
	$this->Query = "CREATE TABLE {$Name}";

	return true;
    }

    public function DataBase($Name,$Charset = 'DEFAULT CHARSET UTF8'){
	$Name = $this->MySQLi->param($Name);
	$this->Query = "CREATE DATABASE {$Name} {$Charset}";

	return true;
    }

    public function Migrate(){
	$this->MySQLi->query($this->Query);

	return true;
    }

    
    /*$this->Table("Name",function Column(){
       
       $Column->Int()->Unsigned()->PrimaryKey();
       $Column->Text()->
       $Column->Migrate();
       
       }); */

    public function PrimaryKey(){
	
    }

    public function NotNull(){
	
    }

    public function Unsigned(){
	
    }

    // Type for Number
    
    public function Tiny(){
	
    }

    public function Small(){
	
    }

    public function Medium(){
	
    }

    public function Int(){
	
    }

    public function BigInt(){
	
    }
    
    public function Float(){
	
    }

    public function Double(){
	
    }

    // Type for Date

    public function Date(){
	
    }

    public function DateTime(){
	
    }

    public function TimeStamp(){
	
    }

    public function Time(){
	
    }

    public function Year(){
	
    }

    // Type for Text

    public function Char(){
	
    }

    public function VarChar(){
	
    }

    public function TinyBlob(){
	
    }

    public function TinyText(){
	
    }

    public function Blob(){
	
    }

    public function Text(){
	
    }

    public function MediumBlob(){
	
    }

    public function MediumText(){
	
    }

    public function LongBlob(){
	
    }

    public function LongText(){
	
    }
    
    // Other Type

    public function Enum(){
	
    }

    public function Set(){
	
    }
}
