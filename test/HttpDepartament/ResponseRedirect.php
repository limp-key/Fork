<?php

namespace Embranchment\HttpDepartament;

trait ResponseRedirect {

    /*
     * Create redirect to other path
     *
     * @param Path
     */
    public function redirect($Path = '/'){

	$Redirect = sprintf('Location: %s', $Path);

	header($Redirect);

	return true;
    }
}
