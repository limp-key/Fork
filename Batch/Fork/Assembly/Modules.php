<?php

namespace Fork\Assembly;

class Modules{

    public static function ToPlug($NameSpace){

	# Convert namespace to file path
	$File = str_replace('\\', '/', $NameSpace);

	# Add .php extension for file path
	$File = sprintf('../Batch/%s.php', $File);

	# Assay file exists 
	if(is_file($File)){
	    
	    # Include file in folder {path/to/project}/Batch/Fork/
	    $Include = require_once $File;
	}
	
	if(isset($Include))
	    return true;
	else
	    return false;
    }
}
