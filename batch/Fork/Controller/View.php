<?php

namespace Fork\Controller;

trait View{

    public function view($Path, $Parameters = array()){
	
	if(!empty($Parameters))
	    extract($Parameters);
	
	#$View = sprintf('%s/views/%s', Config\MainConfig::$ProjectPath, $Path);
	$View = sprintf('%s/views/%s', '/var/www/limp-key/fork/', $Path);
	
	require_once $View;
	
	return true;
    }
}
