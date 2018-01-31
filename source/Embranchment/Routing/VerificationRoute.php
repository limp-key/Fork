<?php

namespace Embranchment\Routing;

class VerificationRoute {

    /*
     * Searching URI in routes list
     *
     * @param array
     *
     * @return array or false
     */
     public static function AssayCustomRedirect($RouteList) {

     	$Request = $_SERVER['REQUEST_URI'];

     	if (!empty($_SERVER['QUERY_STRING'])){
       	    $Request = str_replace( '?' . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']);
     	}       

     	foreach ($RouteList as $Route) {

            $Route['URI'] = str_replace('/','\/',$Route['URI']);

            $Rule = "/^{$Route['URI']}$/";

            if ((empty($_SERVER['REQUEST_URI']) && $Route['URI'] === '\/') ||
                preg_match($Rule, $Request)) {

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

