<?php

namespace Fork\Bin\Config;

class SkeletZlibConfig{

    public static $ZlibOutputCompression;

    public static $ZlibOutputCompressionLevel;

    public static $ZlibOutputHandler;

    # Transparent output compression using the zlib library
    # Valid values for this option are 'off', 'on', or a specific buffer size
    # to be used for compression (default is 4KB)
    # Note: Resulting chunk size may vary due to nature of compression. PHP
    #   outputs chunks that are few hundreds bytes each as a result of
    #   compression. If you prefer a larger chunk size for better
    #   performance, enable output_buffering in addition.
    # Note: You need to use zlib.output_handler instead of the standard
    #   output_handler, or otherwise the output will be corrupted.
    public static function ZlibOutputCompression($Parameter = 'Off'){

	ini_set('zlib.output_compression',$Parameter);
	
	return true;
    }
    
    public static function ZlibOutputCompressionLevel($Parameter = '-1'){

	ini_set('zlib.output_compression_level',$Parameter);
	
	return true;
    }
    
    # You cannot specify additional output handlers if zlib.output_compression
    # is activated here. This setting does the same as output_handler but in
    # a different order.
    public static function ZlibOutputHandler($Parameter = ''){

	ini_set('zlib.output_handler',$Parameter);
	
	return true;
    }
}
