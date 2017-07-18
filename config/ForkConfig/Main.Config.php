<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletMainConfig;

class MainConfig extends SkeletMainConfig{

    // Parameter for framework

    public $ProjectPath = '/var/www/limp-key/fork/';

    public $URL;

    public $TypeKey;

    public $Key;

    public $TypeProject;

    public $Debug;

    // Time zone UTC+2
    
    public $TimeZone;

    public $Locale;

    public $Modules;
    
}
