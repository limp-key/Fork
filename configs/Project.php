<?php

namespace Configs;

use \Fork\Config\SkeletProjectConfig;

class Project extends SkeletProjectConfig{

    # Hard path to project
    public static $Path = '/var/www/limp-key/Fork/';

    # URL project
    public static $URL;

    #  
    public static $TypeKey;

    # 
    public static $Key;

    #
    public static $TypeProject;

    # Show/Hide framework errors
    #
    # If Debug = 'On' show user errors for framework.
    # If Debug = 'Off' show 
    # Warning: Debug not enable/disable PHP errors
    public static $Debug = 'Off';

    #
    public static $Locale;

    #
    public static $Modules;
    
}
