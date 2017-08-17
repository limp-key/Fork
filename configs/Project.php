<?php

namespace Configs;

use \Fork\Config\Types\SkeletProjectConfig;

class Project extends SkeletProjectConfig {

    # Hard path to project
    #
    public static $Path = '/var/www/limp-key/Fork/';

    # URL project
    #
    public static $URL = 'http://fork.loc';

    #
    #
    public static $TypeKey = 'sha512';

    #
    #
    public static $Key = '';

    # Fork supports three types of project work:
    #
    # Production - 
    # Develop    - 
    # Stopped    - 
    #
    public static $TypeProject = '';

    # Show/Hide framework errors
    #
    # If Debug = 'On' show user errors for framework.
    # If Debug = 'Off' show 
    # Warning: Debug not enable/disable PHP errors
    #
    public static $Debug = 'Off';
    
    #
    #
    public static $Modules = array(
	'ConvertMedia' => 
    );    
}
