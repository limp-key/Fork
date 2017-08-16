<?php

namespace Fork\Controller;

trait View{

    public function view($Path, $Parameters = array()){

	try {
	
	    if(!empty($Parameters))
		extract($Parameters);
	    
	    $View = sprintf('%sviews/%s', \Configs\Project::$Path, $Path);

	    if (!is_file($View)) {

		throw new \Exception('Fork did not find the specified template');
	    }
	    
	    require_once $View;
	    
	    return true;

	} catch (\Exception $Info) {

	    \Fork\Exception\ForkException::ExceptionView($Info);
	}
    }
}
