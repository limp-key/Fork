<?php

namespace Fork\Controller;

trait View{

    public function view($Path, $Parameters = array()){
	
	if(!empty($Parameters))
	    extract($Parameters);

	$View = sprintf('%sviews/%s', \Configs\Project::$Path, $Path);

	unset($Parameters);

	unset($Path);
	
	require_once $View;
	
	return true;
    }
}
