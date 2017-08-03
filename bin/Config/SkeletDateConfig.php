<?php

namespace Fork\Bin\Config;

class SkeletDateConfig{

    public static $DateTimezone;
    
    public static $DateDefaultLatitude;
    
    public static $DateDefaultLongitude;
    
    public static $DateSunriseZenith;
    
    public static $DateSunsetZenith;

    
    # Defines the default timezone used by the date functions
    public static function DateTimezone($Parameter = 'Europe/Kiev'){
	
	ini_set('date.timezone',$Parameter);
	
	return true;
    }

    #
    public static function DateDefaultLatitude($Parameter = 31.7667){

	ini_set('date.default_latitude',$Parameter);
	
	return true;
    }

    #
    public static function DateDefaultLongitude($Parameter = 35.2333){

	ini_set('date.default_longitude',$Parameter);
	
	return true;
    }

    #
    public static function DateSunriseZenith($Parameter = 90.58333){

	ini_set('date.sunrise_zenith',$Parameter);
	
	return true;
    }

    #
    public static function DateSunsetZenith($Parameter = 90.583333){

	ini_set('date.sunset_zenith',$Parameter);
	
	return true;
    }
}
