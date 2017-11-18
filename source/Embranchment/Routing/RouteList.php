<?php

namespace Embranchment\Routing;

use Embranchment\Routing\RouteAssay;
use Embranchment\Routing\RouteAssembly;

class RouteList {

    /*
     * 
     *
     * @var array
     */
    private $RouteList = array();

    /*
     * 
     *
     * @param string or array
     * @param array or function
     * @param string
     */
    public function Append($URI = '/', $Action = null, $Name = null) {

	if (is_array($URI)) {
	    
	    $URI = RouteAssay::ConvertRouteRule($URI);
	}

	$this->RouteList[] = ['Name' => $Name,
			      'URI' => $URI,
			      'Action' => $Action];
    }

    /*
     *
     */
    public function Execute() {

	$CallBack = RouteAssay::AssayCustomRedirect($this->RouteList);

	if ($CallBack && is_array($CallBack['Action'])) {
	    
	    RouteAssembly::Convert($CallBack['Action']);
	    
	} else if ($CallBack) {
	    
	    call_user_func($CallBack['Action']);
	}
    }
}
