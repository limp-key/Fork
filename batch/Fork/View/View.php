<?php

namespace Fork\View;

class View{

    public static function View($File){

	$Layout = sprintf('%s/%s',\Fork\Config\MainConfig::$ProjectPath,$File);

	include $Layout;

	return true;
    }

    public static function Token(){

	
    }
}
