<?php

namespace Fork\Controller;

trait ControllerJSON{

    public function json($Parameters = array()){
	
	if(!empty($Parameters))
	    return json_encode($Parameters);
	else
	    return false;
    }
}
