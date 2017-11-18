<?php

namespace Embranchment\Assembly;

class AssemblyConfigs {

    /*
     * Users configs in Config dir
     *
     * @var array
     */
    private $ConfigsJson = array();


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
    private $PathToConfigDir = __DIR__.'/../../../../../../configs/';
    
    /*
     * Converting JSON string to Array
     */
    public function ParsingConfigsFile() {

	foreach ($this->ConfigsJson as $File => $Config) {
	    
	    $this->ConfigsDecode[$File] = json_decode($Config, true);
	}
    }

    /*
     * Includes all files .conf.json in configs dir
     */
    public function IncludesConfigsFiles(){

	if ($Dir = opendir($this->PathToConfigDir)) {
	    
	    while (($File = readdir($Dir)) !== false) {

		if(preg_match('/\.conf.json$/',$File)) {

		    $this->ConfigsJson[$File] = file_get_contents($this->PathToConfigDir.$File);
		}
	    }
	    
	    closedir($Dir);
	}
    }

    /*
     * Change ini configs
     *
     * @param Configs
     *
     */
    public function ExecuteConfigs($Configs){

	foreach ($Configs as $File) {
	    
	    foreach($File as $Option => $Property) {

		ini_set($Option,$Property);
	    }
	}
    }

    /*
     * Run config process
     */
    public function Run(){

	$this->IncludesConfigsFiles();
	
	$this->ParsingConfigsFile();
	
	$this->ExecuteConfigs($this->ConfigsDecode);
    }
}

