<?php

namespace Fork\Controller;

trait Redirect{

    public function redirect($Path = '/'){

	$Redirect = sprintf('Location: %s', $Path);
	
	header($Redirect);
	
	return true;
    }
}
