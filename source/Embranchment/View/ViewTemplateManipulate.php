<?php

namespace Embranchment\View;

trait ViewManipulate {

    public static function Comprise($File){

	$Layout = sprintf('%s/views/%s',\Configs\Project::$Path,$File);

	include $Layout;

	return true;
    }
}
