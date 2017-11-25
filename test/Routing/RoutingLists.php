<?php

namespace Embranchment\Routing;

use Embranchment\Routing\VerificationRoute;
use Embranchment\Routing\CollectionRouteController;

class RoutingLists {

    /*
     * Project route list
     *
     * @var array
     */
    private $RouteList = array();

    /*
     * Adding route to routes list
     *
     * @param string or array
     * @param array or function
     * @param string
     */
    public function Append($URI = '/', $Action = null, $Name = null) {

	if (is_array($URI)) {
	    
	    $URI = VerificationRoute::ConvertRouteRule($URI);
	}

	$this->RouteList[] = ['Name' => $Name,
			      'URI' => $URI,
			      'Action' => $Action];
    }

    /*
     * Create object and call method in the object 
     * or call symple function
     */
    public function Execute() {

	$CallBack = VerificationRoute::AssayCustomRedirect($this->RouteList);

	if ($CallBack && is_array($CallBack['Action'])) {
	    
	    CollectionRouteController::Convert($CallBack['Action']);
	    
	} else if ($CallBack) {
	    
	    call_user_func($CallBack['Action']);
	}
    }
}
