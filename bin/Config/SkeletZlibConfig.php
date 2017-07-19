<?php

namespace Fork\Bin\Config;

class SkeletZlibConfig{

    public static $ZlibOutputCompression = 'Off';

    public static $ZlibOutputCompressionLevel = '-1';

    public static $ZlibOutputHandler = '';

    public static function ZlibOutputCompression($Parameter){

	ini_set();
	
	return true;
    }

    public static function ZlibOutputCompressionLevel($Parameter){

	ini_set();
	
	return true;
    }

    public static function ZlibOutputHandler($Parameter){

	ini_set();
	
	return true;
    }
}
