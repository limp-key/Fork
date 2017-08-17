<?php

namespace Fork\AutoLoad\Types;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadModels extends SkeletAutoLoad {

    public static function ToPlug($NameSpace){
	
	# Change first letter in models namespace to lower case,
	# because custom folder with a capital letter
	#
	$NameSpace = preg_replace('/^Models/','models',$NameSpace);

	# Convert namespace to file path
	#
	$File = parent::NameSpaceToUserPath($NameSpace);

	# Include file for this NameSpace
	#
	parent::Hook($File);

	return true;
    }
}
