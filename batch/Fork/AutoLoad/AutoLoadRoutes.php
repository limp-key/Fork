<?php

namespace Fork\AutoLoad;

use \Fork\AutoLoad\SkeletAutoLoad;

class AutoLoadRoutes extends SkeletAutoLoad {

    public static function ToPlug( $NameSpace ) {
	
	$NameSpace = preg_replace('/^Routes/','routes',$NameSpace);

	$File = parent::NameSpaceToUserPath($NameSpace);

	parent::Hook($File);
    }
}
