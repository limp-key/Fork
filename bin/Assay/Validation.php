<?php

namespace Fork\Bin\Assay;

class Validation{
    public function emailValidation($Parameter){
	$RegularEmail = "/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+$/";
	if(preg_match_all($RegularEmail,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
    public function loginValidation($Parameter){
	$RegularLogin = "/^[a-zA-Z]+$/";
	if(preg_match_all($RegularLogin,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
    public function passwordValidation($Parameter,$Length = 8){
	$RegularPassword = "/^[a-zA-Z0-9_@!+&^%$#()?]+$/";
	if(strlen($Parameter) >= $Length){
	    return true;
	}else{
	    return false;
	}
    }
}
