<?php

namespace Fork\Bin\Migration;

trait Base{
    
    public function table($Name){
	$this->Query = "CREATE TABLE {$Name}";

	return true;
    }

    public function database($Name,$Charset = 'DEFAULT CHARSET UTF8'){
	$Name = $this->MySQLi->param($Name);
	$this->Query = "CREATE DATABASE {$Name} {$Charset}";

	return true;
    }

    public function migrate(){
	$this->MySQLi->query($this->Query);

	return true;
    }
}
