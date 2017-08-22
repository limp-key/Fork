<?php

namespace Configs;

use \Fork\Config\Custom\SkeletDateConfig;

class DateConfig extends SkeletDateConfig{

    public static $DateTimezone = 'Europe/Kiev';
    
    public static $DateDefaultLatitude = '31_7667';
    
    public static $DateDefaultLongitude = '35_2333';
    
    public static $DateSunriseZenith = '90_583333';
    
    public static $DateSunsetZenith = '90_583333';
}
