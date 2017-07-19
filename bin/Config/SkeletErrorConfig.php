<?php

namespace Fork\Bin\Config;

class SkeletErrorConfig{

    public static $ErrorReporting = 'E_ALL & ~E_DEPRECATED & ~E_STRICT';

    public static $DisplayErrors = 'Off';

    public static $DisplayStartupErrors = 'Off';

    public static $LogErrors = 'On';

    public static $LogErrorsMaxLen = '1024';

    public static $IgnoreRepeatedErrors = 'Off';
    
    public static $IgnoreRepeatedSource = 'Off';

    public static $ReportMemleaks = 'On';

    public static $ReportZendDebug = '0';

    public static $TrackErrors = 'Off';

    public static $XMLrpcErrors = '0';

    public static $XMLrpcErrorNumber = '0';

    public static $HtmlErrors = 'On';

    public static $ErrorPrependString = "<span style='color: ff0000'>";

    public static $ErrorAppendString = "</span>";

    public static $ErrorLog = 'syslog';
    
    public static function ErrorReporting($Parameter){

	ini_set();
	
	return true;
    }

    public static function DisplayErrors($Parameter){

	ini_set();
	
	return true;
    }

    public static function DisplayStartupErrors($Parameter){

	ini_set();
	
	return true;
    }

    public static function LogErrors($Parameter){

	ini_set();
	
	return true;
    }

    public static function LogErrorsMaxLen($Parameter){

	ini_set();
	
	return true;
    }

    public static function IgnoreRepeatedErrors($Parameter){

	ini_set();
	
	return true;
    }
    
    public static function IgnoreRepeatedSource($Parameter){

	ini_set();
	
	return true;
    }

    public static function ReportMemleaks($Parameter){

	ini_set();
	
	return true;
    }

    public static function ReportZendDebug($Parameter){

	ini_set();
	
	return true;
    }

    public static function TrackErrors($Parameter){

	ini_set();
	
	return true;
    }

    public static function XMLrpcErrors($Parameter){

	ini_set();
	
	return true;
    }

    public static function XMLrpcErrorNumber($Parameter){

	ini_set();
	
	return true;
    }

    public static function HtmlErrors($Parameter){

	ini_set();
	
	return true;
    }

    public static function ErrorPrependString($Parameter){

	ini_set();
	
	return true;
    }

    public static function ErrorAppendString($Parameter){

	ini_set();
	
	return true;
    }

    public static function ErrorLog($Parameter){

	ini_set();
	
	return true;
    }
}
