<?php

namespace Fork\Bin;

class Config{    
    
    // Parameter for framework

    public $ProjectPath = '/path/to/project';

    public $URL = 'http://localhost';

    public $TypeKey = '256';

    public $Key = 'key';

    public $TypeProject = 'production';

    public $Debug = 'false';

    // Time zone UTC+2
    
    public $TimeZone = 'UTC+2';

    public $Locale = 'EN';

    public $Modules = array(
	'Bin' => [
	    'Assembly'
	]
    );

    public function Config(){
	
    }

    public function System(){
	
    }
    
    
}
