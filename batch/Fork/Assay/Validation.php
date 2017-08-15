<?php

namespace Fork\Assay;

class Validation{
    
    public function Email($Parameter){

	$RegularEmail = "/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+$/";

	return preg_match_all($RegularEmail,$Parameter);
    }
    
    public function Login($Parameter){

	$RegularLogin = "/^[a-zA-Z]+$/";

	return preg_match($RegularLogin,$Parameter);
    }
    
    public function Password($Parameter,$Length = 8){

	$RegularPassword = "/^[a-zA-Z0-9_@!+&^%$#()?]{".$Lenght.",}$/";

	return preg_match($RegularPassword,$Parameter);
    }

    public function URL($Parameter){

	$RegularURL = "#(https:\/\/)?(www\.)?([-а-яa-z0-9_\.]{2,}\.)([a-z]{2,6})((\/[-а-яa-z0-9_]{1,})?\/?([a-z0-9_-]{2,}\.[a-z]{2,6})?(\?[a-z0-9_]{2,}=[-0-9]{1,})?((\&[a-z0-9_]{2,}=[-0-9]{1,}){1,})?)#i";

	return preg_match($RegularURL,$Parameter);
    }
    
    public function Phone($Parameter){

	$RegularPhone = "##i"; #

	return preg_match($RegularPhone,$Parameter);
    }
    
    public function Date($Parameter){

	$RegularDate = "#()#i"; # 2222.22.22 22.22.2222

	return preg_match($RegularDate,$Parameter);
    }

    public function Time($Parameter){

	$RegularDate = "##i"; # 22:09 10:09:03 09:32:04 

	return preg_match($RegularDate,$Parameter);
    }

    public function DateTime($Parameter){

	$RegularDate = "##i";

	return preg_match($RegularDate,$Parameter);
    }
    
    public function File($Parameter){

	$RegularFile = "#^([a-z0-9A-Z]).([a-z])$#i";

	return preg_match($RegularFile,$Parameter);
    }

    public function IPv4($Parameter){

	$RegularIPv4 = "#^\d{1,3}.\d{1,3}.\d{1.3}.\d{1,3}$#i";

	return preg_match($RegularFile,$Parameter);
    }

    public function IPv6($Parameter){
	
	$RegularIPv6 = "#^[a-z0-9]{1,4}:[a-z0-9]{1,4}:[a-z0-9]{1,4}:[a-z0-9]{1,4}:[a-z0-9]{1,4}:[a-z0-9]{1,4}:[a-z0-9]{1,4}:[a-z0-9]{1,4}$#i";

	return preg_match($RegularFile,$Parameter);
    }
}
