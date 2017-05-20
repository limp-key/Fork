<?php

namespace limpWork\Bin;

class Route{

    public static function request($path, $class, $method){
	$GLOBALS['response_class'] = $class;
	$GLOBALS['response_method'] = $method;
    }
}
