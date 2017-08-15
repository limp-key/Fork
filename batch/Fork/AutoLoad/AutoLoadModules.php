<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadModules extends SkeletAutoLoad {

    public static function ToPlug($NameSpace){

	$File = parent::NameSpaceToModulesPath($NameSpace);
	
	parent::Hook($File);
    }
}
