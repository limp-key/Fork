<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletMainConfig;

class MainConfig extends SkeletMainConfig{

    // Parameter for framework

    public static $ProjectPath = '/var/www/limp-key/fork/';

    public static $URL;

    public static $TypeKey;

    public static $Key;

    public static $TypeProject;

    public static $Debug;

    // Time zone UTC+2
    
    public static $TimeZone;

    public static $Locale;

    public static $Modules;
    
}
