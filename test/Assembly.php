<?php

namespace Embranchment;

use \Embranchment\Config\CollectionConfig;
use \Embranchment\Routing\CollectionRoutes;

class Assembly {

    /*
     *  Load all components for the request
     */
    public static function Load(){
	
	CollectionConfig::Start();
	
	CollectionRoutes::Start();
    }
}
