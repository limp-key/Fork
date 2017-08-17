<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadControllers extends SkeletAutoLoad {

    public static function ToPlug($NameSpace) {

	# Change first letter in controllers namespace to lower case,
	# because custom folder with a capital letter
	#
	$NameSpace = preg_replace('/^Controllers/','controllers',$NameSpace);

	# Convert namespace to file path
	#
	$File = parent::NameSpaceToUserPath($NameSpace);
	
	# Include file for this NameSpace
	#
	parent::Hook($File);

	return true;
    }
}
