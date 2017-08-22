<?php

namespace AutoLoad;

use \AutoLoad\SkeletAutoLoad;

class AutoLoadConfigs extends SkeletAutoLoad{

    public static function ToPlug($NameSpace){

	# Change first letter in config namespace to lower case,
	# because custom folder with a capital letter
	#
	$NameSpace = preg_replace('#^Configs#','configs',$NameSpace);

	# Convert namespace to file path
	#
	$File = parent::NameSpaceToConfigsPath($NameSpace);
	
	# Include file for this NameSpace
	#
	parent::Hook($File);

	return true;
    }
}
