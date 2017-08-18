<?php

namespace Fork\Config\Custom;

class SkeletSystemConfig{
    

    public static $DefaultMimetype;

    public static $DefaultCharset;


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
}
