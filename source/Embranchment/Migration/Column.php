<?php

namespace Fork\Modules\Migration;

trait Column {

    public function PrimaryKey(){
	$this->Query .= "PRIMARY KEY";

	return $this;
    }

    public function NotNull(){
	$this->Query .= "NOT NULL";

	return $this;
    }

    public function Unsigned(){
	$this->Query .= "UNSIGNED";

	return $this;
    }

    // Type for Number
    
    public function Tiny($Properties){

	if(empty($Properties)){
	    $this->Query .= "TINYINT";
	}else{
	    $this->Query .= "TINYINT({$Properties})";
	}

	return $this;
    }

    public function Small($Properties){

	if(empty($Properties)){
	    $this->Query .= "SMALLINT";
	}else{
	    $this->Query .= "SMALLINT({$Properties})";
	}

	return $this;
    }

    public function Medium(){

	if(empty($Properties)){
	    $this->Query .= "MEDIUMINT";
	}else{
	    $this->Query .= "MEDIUMINT({$Properties})";
	}

	return $this;
    }

    public function Int(){

	if(empty($Properties)){
	    $this->Query .= "INT";
	}else{
	    $this->Query .= "INT({$Properties})";
	}

	return $this;
    }

    public function BigInt(){

	if(empty($Properties)){
	    $this->Query .= "BIGINT";
	}else{
	    $this->Query .= "BIGINT({$Properties})";
	}

	return $this;
    }
    
    public function Float(){

	if(empty($Properties)){
	    $this->Query .= "FLOAT";
	}else{
	    $this->Query .= "FLOAT({$Properties})";
	}

	return $this;
    }

    public function Double(){

	if(empty($Properties)){
	    $this->Query .= "DOUBLE";
	}else{
	    $this->Query .= "DOUBLE({$Properties})";
	}

	return $this;
    }

    // Type for Date

    public function Date(){

	$this->Query .= "DATE";

	return $this;
    }

    public function DateTime(){

	$this->Query .= "DATETIME";

	return $this;
    }

    public function TimeStamp(){

	$this->Query .= "TIMESTAMP";

	return $this;
    }

    public function Time(){

	$this->Query .= "TIME";

	return $this;
    }

    public function Year(){

	$this->Query .= "YEAR";

	return $this;
    }

    // Type for Text

    public function Char($Properties){

	if(empty($Properties)){
	    $this->Query .= "CHAR";
	}else{
	    $this->Query .= "CHAR({$Properties})";
	}

	return $this;
    }

    public function VarChar(){

	if(empty($Properties)){
	    $this->Query .= "VARCHAR";
	}else{
	    $this->Query .= "VARCHAR({$Properties})";
	}

	return $this;
    }

    public function TinyBlob(){

	if(empty($Properties)){
	    $this->Query .= "TINYBLOB";
	}else{
	    $this->Query .= "TINYBLOB({$Properties})";
	}

	return $this;
    }

    public function TinyText(){

	if(empty($Properties)){
	    $this->Query .= "TINYTEXT";
	}else{
	    $this->Query .= "TINYTEXT({$Properties})";
	}

	return $this;
    }

    public function Blob(){

	if(empty($Properties)){
	    $this->Query .= "BLOB";
	}else{
	    $this->Query .= "BLOB({$Properties})";
	}

	return $this;
    }

    public function Text(){
	
	if(empty($Properties)){
	    $this->Query .= "TEXT";
	}else{
	    $this->Query .= "TEXT({$Properties})";
	}

	return $this;
    }

    public function MediumBlob(){

	if(empty($Properties)){
	    $this->Query .= "MEDIUMBLOB";
	}else{
	    $this->Query .= "MEDIUMBLOB({$Properties})";
	}

	return $this;
    }

    public function MediumText(){

	if(empty($Properties)){
	    $this->Query .= "MEDIUMTEXT";
	}else{
	    $this->Query .= "MEDIUMTEXT({$Properties})";
	}

	return $this;
    }

    public function LongBlob(){

	if(empty($Properties)){
	    $this->Query .= "LONGBLOB";
	}else{
	    $this->Query .= "LONGBLOB({$Properties})";
	}

	return $this;
    }

    public function LongText(){

	if(empty($Properties)){
	    $this->Query .= "LONGTEXT";
	}else{
	    $this->Query .= "LONGTEXT({$Properties})";
	}

	return $this;
    }
    
    // Other Type

    public function Enum(){

	$this->Query .= "ENUM";

	return $this;
    }

    public function Set(){

	$this->Query .= "SET";

	return $this;
    }
}
