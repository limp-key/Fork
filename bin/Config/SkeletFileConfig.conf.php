<?php

namespace Fork\Bin\Config;

class SkeletFileConfig{

    public static $FileUploads;

    public static $UploadTmpDir;

    public static $UploadMaxFilesize;

    public static $MaxFileUploads;

    public static $AutoPrependFile;
    
    public static $AutoAppendFile;

    # Whether to allow HTTP file uploads.
    public static function FileUploads($Parameter = 'On'){

	ini_set('file_uploads',$Parameter);
	
	return true;
    }

    # Temporary directory for HTTP uploaded files (will use system default if not
    # specified).
    public static function UploadTmpDir($Parameter = ''){

	ini_set('upload_tmp_dir',$Parameter);
	
	return true;
    }

    # Maximum allowed size for uploaded files.
    public static function UploadMaxFilesize($Parameter = '2M'){

	ini_set('upload_max_filesize',$Parameter);
	
	return true;
    }

    # Maximum number of files that can be uploaded via a single request
    public static function MaxFileUploads($Parameter = 20){

	ini_set('max_file_uploads',$Parameter);
	
	return true;
    }

    # Automatically add files before PHP document.
    public static function AutoPrependFile($Parameter = ''){

	ini_set('auto_prepend_file',$Parameter);
	
	return true;
    }

    # Automatically add files after PHP document.
    public static function AutoAppendFile($Parameter = ''){

	ini_set('auto_append_file',$Parameter);
	
	return true;
    }
}
