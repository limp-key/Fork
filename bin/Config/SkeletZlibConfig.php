<?php

namespace Fork\Bin\Config;

class SkeletZlibConfig{

    public static $ZlibOutputCompression = 'Off';

    public static $ZlibOutputCompressionLevel = '-1';

    public static $ZlibOutputHandler = '';

    # Transparent output compression using the zlib library
    # Valid values for this option are 'off', 'on', or a specific buffer size
    # to be used for compression (default is 4KB)
    # Note: Resulting chunk size may vary due to nature of compression. PHP
    #   outputs chunks that are few hundreds bytes each as a result of
    #   compression. If you prefer a larger chunk size for better
    #   performance, enable output_buffering in addition.
    # Note: You need to use zlib.output_handler instead of the standard
    #   output_handler, or otherwise the output will be corrupted.
    # http://php.net/zlib.output-compression
    #zlib.output_compression = Off
    public static function ZlibOutputCompression($Parameter){

	ini_set();
	
	return true;
    }
    
    # http://php.net/zlib.output-compression-level
    #zlib.output_compression_level = -1
    public static function ZlibOutputCompressionLevel($Parameter){

	ini_set();
	
	return true;
    }
    
    # You cannot specify additional output handlers if zlib.output_compression
    # is activated here. This setting does the same as output_handler but in
    # a different order.
    # http://php.net/zlib.output-handler
    #zlib.output_handler =
    public static function ZlibOutputHandler($Parameter){

	ini_set();
	
	return true;
    }
}
