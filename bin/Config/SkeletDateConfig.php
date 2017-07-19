<?php

namespace Fork\Bin\Config;

class SkeletDateConfig{

    public static $DateTimezone = '';
    
    public static $DateDefaultLatitude = '31_7667';
    
    public static $DateDefaultLongitude = '35_2333';
    
    public static $DateSunriseZenith = '90_583333';
    
    public static $DateSunsetZenith = '90_583333';


    public static function DateTimezone($Parameter){

	ini_set();
	
	return true;
    }

    public static function DateDefaultLatitude($Parameter){

	ini_set();
	
	return true;
    }

    public static function DateDefaultLongitude($Parameter){

	ini_set();
	
	return true;
    }

    public static function DateSunriseZenith($Parameter){

	ini_set();
	
	return true;
    }

    public static function DateSunsetZenith($Parameter){

	ini_set();
	
	return true;
    }
}
