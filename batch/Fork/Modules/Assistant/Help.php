<?php

namespace \Modules\Assistant;

class Help{

    public $URL;

    public $URI;

    public $Token;
    
    public static function See($Parameter){
	echo htmlentities($Parameter);
    }

    public static function Dump($Parameter,$Type = 1){
	echo '<pre>';

	if ($Type == 1)
	    var_dump($Parameter);
	else
	    print_r($Parameter);
	
	echo '</pre>';
    }

    public static function Token(){

	
    }

    public static function View($File){

	$Layout = sprintf('%s/%s',\Config\MainConfig::$ProjectPath,$File);

	include $Layout;

	return true;
    }
}
