<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletMainConfig;

class MainConfig extends SkeletMainConfig{

    // Parameter for framework

    public $ProjectPath;

    public $URL;

    public $TypeKey;

    public $Key;

    public $TypeProject;

    public $Debug;

    // Time zone UTC+2
    
    public $TimeZone;

    public $Locale;

    public $Modules;

    public function __construct(){
	
    }
    
    public function Config(){
	
    }

    public function System(){
	
    }
    
}
