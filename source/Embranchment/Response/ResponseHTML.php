<?php

namespace Embranchment\Response;

trait ResponseHTML {

    protected $ParametersForView = array();

    public function view($Path, $Parameters = array()){

	$this->ParametersForView = $Parameters;

	# Convert custom template path to full path for view
	#
	//$View = sprintf(__DIR__.'../../../../../views/%s', \Configs\Project::$Path, $Path);
	$View = __DIR__.'/../../../../../../views/'.$Path;

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

	# Generate Token
	#
	/*if( !session_status() ) {
	    session_start();
	    $_SESSION['Token'] = hash('sha512',rand());
	}*/
	
	# Check this layout exists
	#
	if (!is_file($View)) {
	    
	    $Info =  new \Exception('Fork did not find the specified template');
	    
	    \Embranchment\Exception\ForkException::ExceptionView($Info);
	}

	# Plug view for controller request
	#
	require_once $View;
    }
}
