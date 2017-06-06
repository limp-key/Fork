<?php

namespace Fork\Bin\Assay;

class Validation{
    public function emailValidation($Parameter){
	$RegularText = "/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+$/";
	if(preg_match_all($RegularText,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
    public function loginValidation($Parameter){
	$RegularText = "/^[a-zA-Zа-яА-Я]+$/";
	if(preg_match_all($RegularText,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
    public function passwordValidation($Parameter,$Length = 8){
	if(strlen($Parameter) >= $Length){
	    return true;
	}else{
	    return false;
	}
    }
}
