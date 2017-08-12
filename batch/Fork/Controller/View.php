<?php

namespace Controller;

trait View{

    public function redirect($Path = '/'){

	$Redirect = sprintf('Location: %s', $Path);
	
	header($Redirect);
	
	return true;
    }
}
