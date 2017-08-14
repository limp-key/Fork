<?php

namespace Fork\Assembly;

class Controllers{

    public static function ToPlug( $NameSpace ){	 

	$File = str_replace( '\\', '/', $NameSpace );
	
	$File = sprintf( '%s.php', $File );

	if(is_file('/var/www/limp-key/Fork/'.$File)){

	    require_once '/var/www/limp-key/Fork/'.$File;
	}
	
	/*if( $Include ){
	    return true;
	}else{
	    return false;
	   }*/
	return true;
    }
}
