<?php

namespace Fork\AutoLoad;

class Controllers{

    public static function ToPlug($NameSpace){	 

	# Convert namespace to file path
	$File = str_replace('\\', '/', $NameSpace);

	$File = preg_replace('#^Controllers#','controllers',$File);
	
	# Add .php extension for file path
	$File = sprintf('%s.php', $File);

	# Add path project to file controller
	$File = sprintf('%s/%s', \Configs\Project::$Path, $File);
	
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