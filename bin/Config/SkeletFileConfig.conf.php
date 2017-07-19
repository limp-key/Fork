<?php

namespace Fork\Bin\Config;

class SkeletFileConfig{

    public static $FileUploads = 'On';

    public static $UploadTmpDir = '';

    public static $UploadMaxFilesize = '2M';

    public static $MaxFileUploads = '20';

    public static $AutoPrependFile = '';
    
    public static $AutoAppendFile = '';

    # Whether to allow HTTP file uploads.
    # http://php.net/file-uploads
    #file_uploads = On
    public static function FileUploads($Parameter){

	ini_set();
	
	return true;
    }

    # Temporary directory for HTTP uploaded files (will use system default if not
    # specified).
    # http://php.net/upload-tmp-dir
    #upload_tmp_dir =
    public static function UploadTmpDir($Parameter){

	ini_set();
	
	return true;
    }

    # Maximum allowed size for uploaded files.
    # http://php.net/upload-max-filesize
    #upload_max_filesize = 2M
    public static function UploadMaxFilesize($Parameter){

	ini_set();
	
	return true;
    }

    # Maximum number of files that can be uploaded via a single request
    #max_file_uploads = 20
    public static function MaxFileUploads($Parameter){

	ini_set();
	
	return true;
    }

    # Automatically add files before PHP document.
    # http://php.net/auto-prepend-file
    #auto_prepend_file =
    public static function AutoPrependFile($Parameter){

	ini_set();
	
	return true;
    }

    # Automatically add files after PHP document.
    # http://php.net/auto-append-file
    #auto_append_file =
    public static function AutoAppendFile($Parameter){

	ini_set();
	
	return true;
    }
}
