<?php

namespace Fork\Bin\Config;

class SkeletCgiConfig{
    
    public static $CgiForceRedirect = '1';

    public static $CgiNph = '1';

    public static $CgiRedirectStatusEnv = '';

    public static $CgiFixPathinfo= '1';

    public static $CgiDiscardPath= '1';

    public static $FastcgiImpersonate = '1';

    public static $FastcgiLogging = '0';

    public static $CgiRfc2616Headers = '0';

    public static $CgiCheckShebangLine= '1';

    
    public static function CgiForceRedirect($Parameter){

	ini_set();
	
	return true;
    }

    public static function CgiNPH($Parameter){

	ini_set();
	
	return true;
    }

    public static function CgiRedirectStatusEnv($Parameter){

	ini_set();
	
	return true;
    }

    public static function CgiFixPathinfo($Parameter){

	ini_set();
	
	return true;
    }

    public static function CgiDiscardPath($Parameter){

	ini_set();
	
	return true;
    }

    public static function FastcgiImpersonate($Parameter){

	ini_set();
	
	return true;
    }

    public static function FastcgiLogging($Parameter){

	ini_set();
	
	return true;
    }

    public static function Cgirfc2616Headers($Parameter){

	ini_set();
	
	return true;
    }

    public static function CgiCheckShebangLine($Parameter){

	ini_set();
	
	return true;
    }
}
