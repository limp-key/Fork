<?php

namespace AutoLoad;

trait AutoLoadInclude {

    public static function Hook($File){
	
	# Assay file exists 
	if(is_file($File)){

	    # Include file in folder {path/to/project}/Controllers/
	    $Include = require_once $File;
	}

	if(isset($Include))
	    return true;
	else
	    return false;
    }
}
