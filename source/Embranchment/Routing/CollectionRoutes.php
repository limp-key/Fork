<?php

namespace Embranchment\Routing;

use Embranchment\Routing\RouteList;

class CollectionRoutes {

    /*
     * Path to routes dir
     *
     * @var string
     */
    private $RouteDir = __DIR__.'/../../../../../../routes/';

    /*
     * Includes routes in routes/ directory
     */
    public function Load() {

	$List = new RouteList();
	
	if ($Dir = opendir($this->RouteDir)) {
	    
	    while (($File = readdir($Dir)) !== false) {

		if(preg_match('/\.route.php$/',$File)) {
		    
		    require($this->RouteDir.$File);
		}
	    }
	    
	    closedir($Dir);
	}

	$List->Execute();
    }


    public static function Start () {

	$Routes = new \Embranchment\Routing\CollectionRoutes();

	$Routes->Load();
    }
}
