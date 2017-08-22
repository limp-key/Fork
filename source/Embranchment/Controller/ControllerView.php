<?php

namespace Fork\Controller;

trait ControllerView{

    protected $ParametersForView = array();

    public function view($Path, $Parameters = array()){

	$this->ParametersForView = $Parameters;

	# Convert custom template path to full path for view
	#
	$View = sprintf('%sviews/%s', \Configs\Project::$Path, $Path);

	# Include this view and
	# assay file exists
	#
	$this->IncludeTemplate($View);

	# For normal operation of the controller, we return true
	#
	return true;
    }
    
    public function IncludeTemplate($View) {

	if (!empty($this->ParametersForView)) {

	    # If the layouts are passed to array variables
	    # Fork converted this array to variable
	    #
	    extract($this->ParametersForView);
	}

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
