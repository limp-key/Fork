<?php

namespace Fork\Controller;

trait ControllerView{

    public function view($Path, $Parameters = array()){

	# Convert custom template path to full path for view
	#
	$View = sprintf('%sviews/%s', \Configs\Project::$Path, $Path);

	# Include this view and
	# assay file exists
	#
	$this->IncludeTemplate($View, $Parameters);

	# For normal operation of the controller, we return true
	#
	return true;
    }
    
    public function IncludeTemplate($View, $Parameters = array()) {

	if (!empty($Parameters))
	    extract($Parameters);

	# Check this layout exists
	#
	if (!is_file($View)) {
	    
	    $Info =  new \Exception('Fork did not find the specified template');
	    
	    \Fork\Exception\ForkException::ExceptionView($Info);
	}

	# Plug view for controller request
	#
	require_once $View;
    }
}
