<?php

namespace Fork\Assistant;

class Help{

    public $URL;

    public $URI;

    public $Token;
    
    public static function See($Parameter){

	# Ecraning and output $Parameter
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
}
