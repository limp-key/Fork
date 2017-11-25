<?php

namespace Embranchment\HttpDepartament;

trait ResponseJSON {

    /*
     * Convert Array to JSON and return JSON scring
     *
     * @param Parameters
     *
     * @return string
     */
    public function json($Parameters = array()) {

	if (!empty($Parameters) and is_array($Parameters)) {
	    
	    return json_encode($Parameters);
	}

	return false;
    }
}
