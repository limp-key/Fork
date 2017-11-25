<?php

namespace Embranchment\HttpDepartament;

use \Embranchment\Session\SessionVerification as Session;

class Request {

    /* 
     * Assay variables in array
     *
     * @return array or null
     */
    public function VariableToHtmlEnTities($Variables) {

	if (!empty($Variables)) {
	    
	    foreach ($Variables as &$Variable) {

		$Variable = htmlentities($Variable, ENT_QUOTES);
	    }
	    return $Variables;
	    
	} else {
	    return null;
	}
    }

    
    /* 
     * Convert all applicable characters in
     * POST var to HTML entities
     *
     * @return array or null
     */
    public function POST() {
	
	if ($this->VerifyTokenPOST()) {
	
	    return $this->VariableToHtmlEnTities($_POST);
	}

	return false;
    }

    /*
     *
     */
    public function VerifyTokenPOST() {

	if (!Session::IsStarted()) session_start();
	
	if (!empty($_POST['token']) && !empty($_SESSION['token'])) {
	    
	    if ($_POST['token'] == $_SESSION['token']) {
		
		return true;
	    }
	}

	return false;
    }

    /*
     *
     */
    public function VerifyTokenGET() {

	if (!Session::IsStarted()) session_start();
	
	if (!empty($_GET['token']) && !empty($_SESSION['token'])) {
	    
	    if ($_GET['token'] == $_SESSION['token']) {
		
		return true;
	    }
	}

	return false;
    }
    
    /* 
     * Convert all applicable characters in
     * GET var to HTML entities
     *
     * @return array or null
     */
    public function GET() {
	    
	return $this->VariableToHtmlEnTities($_GET);
    }

    /* 
     * Assay one file in request
     *
     * @return array or null
     */
    public function File($Parameter) {

	if (empty($_FILES))
	    return null;
	
	$Files = $_FILES;
	
	$File[$Parameter]['name']     = htmlentities($Files[$Parameter]['name'], ENT_QUOTES);
	
	$File[$Parameter]['type']     = htmlentities($Files[$Parameter]['type'], ENT_QUOTES);
	
	$File[$Parameter]['size']     = htmlentities($Files[$Parameter]['size'], ENT_QUOTES);
	
	$File[$Parameter]['tmp_name'] = htmlentities($Files[$Parameter]['tmp_name'], ENT_QUOTES);
	
	$File[$Parameter]['byte']     = !empty($Files[$Parameter]['tmp_name']) ? file_get_contents($Files[$Parameter]['tmp_name']) : '';
	
	$File[$Parameter]['error']    = htmlentities($Files[$Parameter]['error'], ENT_QUOTES);
	

	if ($this->VerifyTokenPOST()) {

	    return $File;
	}
	
	return false;
    }

    /* 
     * Assay many files in request
     *
     * @return array or null
     */
    public function Files() {
	
	if (empty($_FILES)) {
	    
	    return null;
	}
	
	$FilesRequest = $_FILES;
	
	foreach($FilesRequest as $NameFileLists => $FileProperties){
	    
	    foreach($FileProperties as $Property){
		
		if (is_array($Property)) {

		    foreach($Property as $Option){
			$Option = htmlentities($Option, ENT_QUOTES);
		    }
		    
		} else {
		    
		    $Property = htmlentities($Property, ENT_QUOTES);
		}
	    }
	    
	    if (is_array($FileProperties['tmp_name'])) {

		foreach ($FileProperties['tmp_name'] as $Files) {

		    $FileProperties['byte'][] = !empty($Files) ? file_get_contents($Files) : null;
		}		
	    } else {
		
		$FileProperties['byte'] = !empty($FileProperties['tmp_name']) ? file_get_contents($FileProperties['tmp_name']) : '';
	    }
	    
	    $FilesRequest[$NameFileLists] = $FileProperties;
	}
	
	if ($this->VerifyTokenPOST()) {

	    return $FilesRequest;
	}
	
	return false;
    }
}
