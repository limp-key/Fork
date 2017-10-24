<?php

namespace Embranchment\Assembly;

class AssemblyRoutes {

    public static function Load() {

	$RouteDir = sprintf('%s/routes/', \Configs\Project::$Path);
	
	if ($Dir = opendir($RouteDir)) {
	    
	    while (($File = readdir($Dir)) !== false) {

		if(preg_match('/\.php$/',$File)) {
		    
		    require($RouteDir.$File);
		}
	    }
	    
	    closedir($Dir);
	}
    }
}
