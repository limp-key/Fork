<?php

namespace Embranchment\Config;

class Project {

    /*
     * Users configs in Config dir 
     * decoded from json string to array
     *
     * @var array
     */
    private $ConfigsDecode = array();

    /*
     * Path to config dir 
     * 
     * Warning! Fork can not execute configs, 
     *          if project structure it's not like this: 
     * configs/ 
     * vendor/fork/sourse/Embranchment/Assembly/ 
     * 
     * @var string
     */
    private $PathToProjectConfig = __DIR__.'/../../../../../../project.conf.json';
    
    /*
     * Converting JSON string to Array
     */
    public function ParsingConfigsFile() {

	$Config = file_get_contents($this->PathToProjectConfig);

	$Config = json_decode($Config, true);

	foreach ($Config as $Key => $Option) {

	    $this->ConfigsDecode[$Key] = $Option;
	}
    }

    public static function Path() {

	$Config = new \Embranchment\Config\Project();

	return $Config->Run();
    }

    /*
     * Run config process
     */
    public function Run(){
	
	$this->ParsingConfigsFile();
	
	return $this->ConfigsDecode['path'];
    }
}

