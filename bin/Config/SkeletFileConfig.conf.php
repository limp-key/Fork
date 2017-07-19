<?php

namespace Fork\Bin\Config;

class SkeletFileConfig{

    public static $FileUploads = 'On';

    public static $UploadTmpDir = '';

    public static $UploadMaxFilesize = '2M';

    public static $MaxFileUploads = '20';

    public static $AutoPrependFile = '';
    
    public static $AutoAppendFile = '';

    public static function FileUploads($Parameter){

	ini_set();
	
	return true;
    }

    public static function UploadTmpDir($Parameter){

	ini_set();
	
	return true;
    }

    public static function UploadMaxFilesize($Parameter){

	ini_set();
	
	return true;
    }

    public static function MaxFileUploads($Parameter){

	ini_set();
	
	return true;
    }

    public static function AutoPrependFile($Parameter){

	ini_set();
	
	return true;
    }
    
    public static function AutoAppendFile($Parameter){

	ini_set();
	
	return true;
    }
}
