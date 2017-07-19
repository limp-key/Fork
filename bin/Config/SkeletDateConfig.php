<?php

namespace Fork\Bin\Config;

class SkeletDateConfig{

    public static $DateTimezone = '';
    
    public static $DateDefaultLatitude = '31_7667';
    
    public static $DateDefaultLongitude = '35_2333';
    
    public static $DateSunriseZenith = '90_583333';
    
    public static $DateSunsetZenith = '90_583333';

    
    # Defines the default timezone used by the date functions
    # http://php.net/date.timezone
    #date.timezone =
    public static function DateTimezone($Parameter){

	ini_set();
	
	return true;
    }
    
    # http://php.net/date.default-latitude
    #date.default_latitude = 31.7667
    public static function DateDefaultLatitude($Parameter){

	ini_set();
	
	return true;
    }

    # http://php.net/date.default-longitude
    #date.default_longitude = 35.2333
    public static function DateDefaultLongitude($Parameter){

	ini_set();
	
	return true;
    }
    
    # http://php.net/date.sunrise-zenith
    #date.sunrise_zenith = 90.583333
    public static function DateSunriseZenith($Parameter){

	ini_set();
	
	return true;
    }
    
    # http://php.net/date.sunset-zenith
    #date.sunset_zenith = 90.583333
    public static function DateSunsetZenith($Parameter){

	ini_set();
	
	return true;
    }
}
