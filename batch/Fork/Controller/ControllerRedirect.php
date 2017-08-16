<?php

namespace Fork\Controller;

trait ControllerRedirect{

    public function redirect($Path = '/'){

	$Redirect = sprintf('Location: %s', $Path);
	
	header($Redirect);
	
	return true;
    }
}
