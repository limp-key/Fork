<?php

namespace Fork\Assembly;

class Controllers{

    public static function ToPlug( $NameSpace ){	 

	$File = str_replace( '\\', '/', $NameSpace );
	
	$File = sprintf( '%s.php', $File );

	if(is_file('/var/www/limp-key/fork/'.$File)){
	    echo '/var/www/limp-key/fork/'.$File;
	    echo '<br>';
	    require_once '/var/www/limp-key/fork/'.$File;
	}
	
	/*if( $Include ){
	    return true;
	}else{
	    return false;
	   }*/
	return true;
    }
}
