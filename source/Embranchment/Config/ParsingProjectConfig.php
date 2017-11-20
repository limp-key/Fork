<?php

namespace Embranchment\Config;

class ParsingProjectConfig {

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
    private $PathToProjectConfig = __DIR__.'/../../../../../../project.config.json';
    
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

    /*
     * Show option in project config
     *
     * @param string
     *
     * @return string
     */
    public static function Show($Parameter) {

	$Config = new \Embranchment\Config\ParsingProjectConfig();
	
	$Config->ParsingConfigsFile();

	return $Config->ConfigsDecode[$Parameter];
    }
}

