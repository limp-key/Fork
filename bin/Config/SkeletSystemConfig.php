<?php

namespace Fork\Bin\Config;

class SkeletSystemConfig{

    public static $MaxExecutionTime;

    public static $MaxInputTime;

    public static $MaxInputNestingLevel;

    public static $MaxInputVars;

    public static $MemoryLimit;
    
    public static $DefaultMimetype;

    public static $DefaultCharset;

    public static $PostMaxSize;

    public static $EnablePostDataReading;

    public static $InternalEncoding;

    public static $InputEncoding;

    public static $OutputEncoding;

    
    # Maximum execution time of each script, in seconds
    # Note: This directive is hardcoded to 0 for the CLI SAPI
    public static function MaxExecutionTime($Parameter = '30'){

	ini_set('max_execution_time',$Parameter);
	
	return true;
    }

    # Maximum amount of time each script may spend parsing request data. It's a good
    # idea to limit this time on productions servers in order to eliminate unexpectedly
    # long running scripts.
    # Note: This directive is hardcoded to -1 for the CLI SAPI
    # Default Value: -1 (Unlimited)
    # Development Value: 60 (60 seconds)
    # Production Value: 60 (60 seconds)
    public static function MaxInputTime($Parameter = '60'){

	ini_set('max_input_time',$Parameter);
	
	return true;
    }

    # Maximum input variable nesting level
    public static function MaxInputNestingLevel($Parameter = '64'){

	ini_set('max_input_nesting_level',$Parameter);
	
	return true;
    }

    # How many GET/POST/COOKIE input variables may be accepted
    public static function MaxInputVars($Parameter = '1000'){

	ini_set('max_input_vars',$Parameter);
	
	return true;
    }
    
    # Maximum amount of memory a script may consume (128MB)
    public static function MemoryLimit($Parameter = '128M'){

	ini_set('memory_limit',$Parameter);
	
	return true;
    }

    # Whether PHP will read the POST data.
    # This option is enabled by default.
    # Most likely, you won't want to disable this option globally. It causes $_POST
    # and $_FILES to always be empty# the only way you will be able to read the
    # POST data will be through the php://input stream wrapper. This can be useful
    # to proxy requests or to process the POST data in a memory efficient fashion.
    public static function EnablePostDataReading($Parameter = 'Off'){

	ini_set('enable_post_data_reading',$Parameter);
	
	return true;
    }

    # Maximum size of POST data that PHP will accept.
    # Its value may be 0 to disable the limit. It is ignored if POST data reading
    # is disabled through enable_post_data_reading.
    public static function PostMaxSize($Parameter = '8M'){

	ini_set('post_max_size',$Parameter);
	
	return true;
    }

    # By default, PHP will output a media type using the Content-Type header. To
    # disable this, simply set it to be empty.
    #
    # PHP's built-in default media type is set to text/html.
    public static function DefaultMimetype($Parameter = 'text/html'){

	ini_set('default_mimetype',$Parameter);
	
	return true;
    }

    # PHP's default character set is set to UTF-8.
    public static function DefaultCharset($Parameter = 'UTF-8'){

	ini_set('default_charset',$Parameter);
	
	return true;
    }

    # PHP internal character encoding is set to empty.
    # If empty, default_charset is used.
    public static function InternalEncoding($Parameter = ''){

	ini_set('internal_encoding',$Parameter);
	
	return true;
    }

    # PHP input character encoding is set to empty.
    # If empty, default_charset is used.
    public static function InputEncoding($Parameter = ''){

	ini_set('input_encoding',$Parameter);
	
	return true;
    }

    # PHP output character encoding is set to empty.
    # If empty, default_charset is used.
    # See also output_buffer.
    public static function OutputEncoding($Parameter = ''){

	ini_set('output_encoding',$Parameter);
	
	return true;
    }

}
