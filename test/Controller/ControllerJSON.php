<?php

namespace Embranchment\Controller;

trait ControllerJSON {

    public function json($Parameters = array()) {

	if (!empty($Parameters) and is_array($Parameters)) {

	    # Encode array to json
	    #
	    return json_encode($Parameters);

	}

	# Because variable $Parameters empty
	# Fork create controller exception
	#
	return false;
    }
}
