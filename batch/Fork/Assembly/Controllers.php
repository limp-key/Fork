<?php

namespace Fork\Assembly;

class Controllers{

    public static function ToPlug( $NameSpace ){	 

	$File = str_replace( '\\', '/', $NameSpace );

	$File = sprintf( '%s.php', $File );
	
	if(!is_file($File)){
	    return false;
	}
	
	$Include  = require_once $File;
	
	if( $Include ){
	    return true;
	}else{
	    return false;
	}
    }
}
