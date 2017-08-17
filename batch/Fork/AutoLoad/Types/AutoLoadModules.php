<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadModules extends SkeletAutoLoad {

    public static function ToPlug($NameSpace){

	# Convert namespace to file path
	#
	$File = parent::NameSpaceToModulesPath($NameSpace);
	
	# Include file for this NameSpace
	#
	parent::Hook($File);

	return true;
    }
}
