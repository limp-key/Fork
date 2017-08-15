<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadModels extends SkeletAutoLoad {

    public static function ToPlug($NameSpace){

	$NameSpace = preg_replace('/^Models/','models',$NameSpace);

	$File = parent::NameSpaceToUserPath($NameSpace);

	parent::Hook($File);
    }
}
