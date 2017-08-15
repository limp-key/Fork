<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadControllers extends SkeletAutoLoad {

    public static function ToPlug($NameSpace) {

	$NameSpace = preg_replace('/^Controllers/','controllers',$NameSpace);

	$File = parent::NameSpaceToUserPath($NameSpace);
	
	parent::Hook($File);

    }
}
