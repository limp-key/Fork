<?php

namespace Fork\View;

class View{

    public static function Token(){

	
    }

    public static function Comprise($File){

	$Layout = sprintf('%s/views/%s',\Configs\Project::$Path,$File);

	include $Layout;

	return true;
    }
}
