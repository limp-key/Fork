<?php

namespace Fork\View;

class File{

    public static function Comprise($File){

	$Layout = sprintf('%s/views/%s',\Fork\Config\Project::$Path,$File);

	include $Layout;

	return true;
    }
}
