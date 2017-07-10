<?php

namespace Fork\Bin\Assay;

class Validation{
    public function email($Parameter){
	$RegularEmail = "/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+$/";
	if(preg_match_all($RegularEmail,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
    public function login($Parameter){
	$RegularLogin = "/^[a-zA-Z]+$/";
	if(preg_match_all($RegularLogin,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
    public function password($Parameter,$Length = 8){
	$RegularPassword = "/^[a-zA-Z0-9_@!+&^%$#()?]+$/";
	if(strlen($Parameter) >= $Length){
	    return true;
	}else{
	    return false;
	}
    }

    public function url($Parameter){
	$RegularURL = "#(https:\/\/)?(www\.)?([-а-яa-z0-9_\.]{2,}\.)([a-z]{2,6})((\/[-а-яa-z0-9_]{1,})?\/?([a-z0-9_-]{2,}\.[a-z]{2,6})?(\?[a-z0-9_]{2,}=[-0-9]{1,})?((\&[a-z0-9_]{2,}=[-0-9]{1,}){1,})?)#i";
	if(preg_match_all($RegularURL,$Parameter)){
	    return true;
	}else{
	    return false;
	}
    }
}
