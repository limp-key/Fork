<?php

namespace Fork\Bin\Config;

class SkeletSystemConfig{

    public static $MaxExecutionTime = '30';

    public static $MaxInputTime = '60';

    public static $MaxInputNestingLevel = '64';

    public static $MaxInputVars = '1000';

    public static $MemoryLimit = '128M';
    
    public static $DefaultMimetype = "text/html";

    public static $DefaultCharset = "UTF-8";

    public static $PostMaxSize = '8M';

    public static $EnablePostDataReading = 'Off';

    public static $InternalEncoding = '';

    public static $InputEncoding = '';

    public static $OutputEncoding = '';

    public static function MaxExecutionTime($Parameter){

	ini_set();
	
	return true;
    }

    public static function MaxInputTime($Parameter){

	ini_set();
	
	return true;
    }

    public static function MaxInputNestingLevel($Parameter){

	ini_set();
	
	return true;
    }

    public static function MaxInputVars($Parameter){

	ini_set();
	
	return true;
    }

    public static function MemoryLimit($Parameter){

	ini_set();
	
	return true;
    }

    
    public static function EnablePostDataReading($Parameter){

	ini_set();
	
	return true;
    }

    public static function PostMaxSize($Parameter){

	ini_set();
	
	return true;
    }
    
    public static function DefaultMimetype($Parameter){

	ini_set();
	
	return true;
    }

    public static function DefaultCharset($Parameter){

	ini_set();
	
	return true;
    }

    public static function InternalEncoding($Parameter){

	ini_set();
	
	return true;
    }

    public static function InputEncoding($Parameter){

	ini_set();
	
	return true;
    }

    public static function OutputEncoding($Parameter){

	ini_set();
	
	return true;
    }
}
