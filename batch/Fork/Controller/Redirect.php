<?php

namespace Fork/Controller;

trait View{

    public function view($Path, $Parameters = array()){
	
	if(!empty($Parameters))
	    extract($Parameters);
	
	$View = sprintf('%s/views/%s', Config\MainConfig::$ProjectPath, $Path);
	
	require_once $View;
	
	return true;
    }
}
