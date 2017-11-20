<?php

namespace Embranchment\Routing;

class RouteAssay {

    /*
     * Searching URI in routes list
     *
     * @param array
     *
     * @return array or false
     */
    public static function AssayCustomRedirect($RouteList) {

	foreach ($RouteList as $Route) {

	    $Route['URI'] = str_replace('/','\/',$Route['URI']);
	    
	    $Rule = "/^{$Route['URI']}$/";
	    
	    if ((empty($_SERVER['REDIRECT_URL']) && $Route['URI'] === '\/') ||
		preg_match($Rule, $_SERVER['REDIRECT_URL'])) {
		
		return $Route;
	    }
	}

	return false;
    }

    /*
     * Replace variables in request URI to regex rules
     *
     * @param
     *
     * @return
     */
    public static function ConvertRouteRule ($Route) {

	$URI = key($Route);

	$Rules = $Route[$URI];

	foreach ($Rules as $Key => $Option) {

	    $Replace = '/{'.$Key.'}/';
	    
	    $URI = preg_replace($Replace,$Option,$URI);
	}
	return $URI;
    }
}
