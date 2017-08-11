<?php

namespace Fork\Bin\Controller;

trait Redirect{

    public function view($Path, $Parameters = array()){
	
	if(!empty($Parameters))
	    extract($Parameters);
	
	$View = sprintf('%s/views/%s', \Fork\Config\MainConfig::$ProjectPath, $Path);
	
	require_once $View;
	
	return true;
    }
}
