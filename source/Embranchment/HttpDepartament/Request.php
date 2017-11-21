<?php

namespace Embranchment\HttpDepartament;

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
	
	return $this->VariableToHtmlEnTities($_POST);
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
	
	$File[$Parameter]['byte']     = htmlentities(file_get_contents($Files['userfile']['tmp_name']), ENT_QUOTES);
	
	$File[$Parameter]['error']    = htmlentities($Files[$Parameter]['error'], ENT_QUOTES);
	
	return $File;
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
	
	$Files = $_FILES;
	
	foreach($Files as &$FileProperties){
	    
	    foreach($FileProperties as &$Property){
		
		$Property = htmlentities($Property, ENT_QUOTES);
	    }
	}
	
	return $Files;
    }
}
