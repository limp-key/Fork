<?php

namespace Embranchment\View;

trait ViewTemplateManipulate {

    public static function Comprise($File){

	$Layout = sprintf('%s/views/%s',\Configs\Project::$Path,$File);

	include $Layout;

	return true;
    }
}
