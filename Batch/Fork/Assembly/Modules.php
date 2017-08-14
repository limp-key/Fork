<?php

namespace Fork\Assembly;

class Modules{

    public static function ToPlug($Class){

	$File = str_replace('\\', '/', $Class);

	$File = sprintf('%s.php', $File);
	
	if(is_file('/var/www/limp-key/Fork/Batch/'.$File)){
	    require_once '/var/www/limp-key/Fork/Batch/'.$File;
	}
	


	return true;
    }
}
