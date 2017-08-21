<?php

namespace Configs;

<<<<<<< HEAD
use \Fork\Config\Custom\SkeletProjectConfig;
=======
use \Fork\Config\Types\SkeletProjectConfig;
>>>>>>> parent of 2a5056c... Structure

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

<<<<<<< HEAD
    # 
    # Default: 10
    # Recomended: 13
    #
    public static $WeightKey = 10;
=======
    #
    #
    public static $Key = '';
>>>>>>> parent of 2a5056c... Structure

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
<<<<<<< HEAD
	'ConvertMedia' => '\ConvertMedia\ConvertMedia',
	    'Sockets' => '\Sockets\Sockets'
=======
	'ConvertMedia' => 
>>>>>>> parent of 2a5056c... Structure
    );    
}
