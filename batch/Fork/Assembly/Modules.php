<?php

namespace Fork\Assembly;

class Modules{

    public static function ToPlug($Class){

	$File = str_replace('\\', '/', $Class);

	$File = sprintf('%s.php', $File);

	/* if(!is_file($File)){
	   return false;
	   }
	 */
	require_once '/var/www/limp-key/fork/batch/'.$File;

	return true;
    }
}
