<?php

namespace Fork\AutoLoad;

class Configs{

    public static function ToPlug($NameSpace){

	try {
	
	    # Convert namespace to file path
	    $File = str_replace('\\', '/', $NameSpace);
	    
	    $File = preg_replace('#^Configs#','configs',$File);
	    
	    # Add .php extension for file path
	    $File = sprintf('../%s.php', $File);
	    
	    # Assay file exists 
	    if(is_file($File)){
		
		# Include file in folder {path/to/project}/configs/
		$Include = require_once $File;
	    }
	    
	    if(isset($Include)){
		return true;
	    }else{
		return false;
	    }
	    
	} catch (\Exception $e) {
	    
	}
    }
}
