<?php

namespace Embranchment\HttpDepartament;

trait ResponseHTML {

    /*
     * Array variables for view
     *
     * @var array
     */
    protected $ParametersForView = array();

    /*
     * Convert custom template path to full path for view
     *
     * @param string
     * @param array
     *
     * @return resource
     */
    public function view($Path, $Parameters = array()){

	$this->ParametersForView = $Parameters;
	
	$View = __DIR__.'/../../../../../../views/'.$Path;

	$this->IncludeTemplate($View);

	return true;
    }

    /*
     * Including template and extracting array to variables
     *
     * @param resource
     *
     * @return resource
     */
    public function IncludeTemplate($View) {

	if (!empty($this->ParametersForView)) {

	    extract($this->ParametersForView);
	}

	/*if( !session_status() ) {
	    session_start();
	    $_SESSION['Token'] = hash('sha512',rand());
	   }*/
	include 'ViewTemplateFunction.php';
	
	if (!is_file($View)) {
	    
	    $Info =  new \Exception('Fork did not find the specified template');
	    
	    \Embranchment\Exception\ForkException::ExceptionView($Info);
	}

	require_once $View;
    }
}
