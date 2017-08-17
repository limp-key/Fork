<?php

namespace Fork\Bin\Modules\Migration;

trait Database{

    public function DataBase($Name,$Charset = 'DEFAULT CHARSET UTF8'){
	
	$Name = $this->MySQLi->param($Name);
	$this->Query = "CREATE DATABASE {$Name} {$Charset}";

	return true;
    }
  
}
