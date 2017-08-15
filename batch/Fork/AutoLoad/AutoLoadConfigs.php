<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadConfigs extends SkeletAutoLoad{

    public static function ToPlug($NameSpace){

	$NameSpace = preg_replace('#^Configs#','configs',$NameSpace);

	$File = parent::NameSpaceToConfigsPath($NameSpace);
	
	parent::Hook($File);
    }
}
