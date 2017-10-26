<?php

namespace Embranchment\Assembly;

class AssemblyConfigs {

    /*
     * Users configs in Config dir
     *
     * @var array
     */
    $Configs = array();

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
    $PathToConfigDir = '../../../../../../configs/';
    
    /*
     * Converting JSON string to Array
     *
     * @param File
     *
     * @return array
     */
    public function ParsingConfigsFile($File) {
	
    }

    /*
     * Includes all files .conf.json in configs dir
     */
    public function IncludesConfigsFiles(){
	
    }

    /*
     * Change ini configs
     *
     * @param Configs
     *
     */
    public function ExecuteConfigs($Configs){

	foreach ($Configs as $Option => $Property) {
	    
	    ini_set($Option,$Property);
	}
    }

    /*
     * Run config process
     */
    public static function Run(){

	$this->ParsingConfigsFile();

	$this->IncludeConfigsFiles();

	$this->ExecuteConfigs();
    }
}

