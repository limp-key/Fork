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

    
    # Maximum execution time of each script, in seconds
    # http://php.net/max-execution-time
    # Note: This directive is hardcoded to 0 for the CLI SAPI
    #max_execution_time = 30
    public static function MaxExecutionTime($Parameter){

	ini_set();
	
	return true;
    }

    # Maximum amount of time each script may spend parsing request data. It's a good
    # idea to limit this time on productions servers in order to eliminate unexpectedly
    # long running scripts.
    # Note: This directive is hardcoded to -1 for the CLI SAPI
    # Default Value: -1 (Unlimited)
    # Development Value: 60 (60 seconds)
    # Production Value: 60 (60 seconds)
    # http://php.net/max-input-time
    #max_input_time = 60
    public static function MaxInputTime($Parameter){

	ini_set();
	
	return true;
    }

    # Maximum input variable nesting level
    # http://php.net/max-input-nesting-level
    #max_input_nesting_level = 64
    public static function MaxInputNestingLevel($Parameter){

	ini_set();
	
	return true;
    }

    # How many GET/POST/COOKIE input variables may be accepted
    #max_input_vars = 1000
    public static function MaxInputVars($Parameter){

	ini_set();
	
	return true;
    }
    
    # Maximum amount of memory a script may consume (128MB)
    # http://php.net/memory-limit
    #memory_limit = 128M
    public static function MemoryLimit($Parameter){

	ini_set();
	
	return true;
    }

    # Whether PHP will read the POST data.
    # This option is enabled by default.
    # Most likely, you won't want to disable this option globally. It causes $_POST
    # and $_FILES to always be empty# the only way you will be able to read the
    # POST data will be through the php://input stream wrapper. This can be useful
    # to proxy requests or to process the POST data in a memory efficient fashion.
    # http://php.net/enable-post-data-reading
    #enable_post_data_reading = Off
    public static function EnablePostDataReading($Parameter){

	ini_set();
	
	return true;
    }

    # Maximum size of POST data that PHP will accept.
    # Its value may be 0 to disable the limit. It is ignored if POST data reading
    # is disabled through enable_post_data_reading.
    # http://php.net/post-max-size
    #post_max_size = 8M
    public static function PostMaxSize($Parameter){

	ini_set();
	
	return true;
    }

    # By default, PHP will output a media type using the Content-Type header. To
    # disable this, simply set it to be empty.
    #
    # PHP's built-in default media type is set to text/html.
    # http://php.net/default-mimetype
    #default_mimetype = "text/html"
    public static function DefaultMimetype($Parameter){

	ini_set();
	
	return true;
    }

    # PHP's default character set is set to UTF-8.
    # http://php.net/default-charset
    #default_charset = "UTF-8"
    public static function DefaultCharset($Parameter){

	ini_set();
	
	return true;
    }

    # PHP internal character encoding is set to empty.
    # If empty, default_charset is used.
    # http://php.net/internal-encoding
    #internal_encoding =
    public static function InternalEncoding($Parameter){

	ini_set();
	
	return true;
    }

    # PHP input character encoding is set to empty.
    # If empty, default_charset is used.
    # http://php.net/input-encoding
    #input_encoding =
    public static function InputEncoding($Parameter){

	ini_set();
	
	return true;
    }

    # PHP output character encoding is set to empty.
    # If empty, default_charset is used.
    # See also output_buffer.
    # http://php.net/output-encoding
    #output_encoding =
    public static function OutputEncoding($Parameter){

	ini_set();
	
	return true;
    }

}
