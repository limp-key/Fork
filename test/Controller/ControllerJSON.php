<?php

namespace Embranchment\Controller;

trait ControllerJSON {

    /*
     * Convert Array to JSON and return JSON scring
     *
     * @param Parameters
     *
     * @return string
     */
    public function json($Parameters = array()) {

	/* 
	 * Because variable $Parameters empty
	 * Fork create controller exception
	 */
	if (!empty($Parameters) and is_array($Parameters)) {
	    
	    return json_encode($Parameters);
	}

	return false;
    }
}
