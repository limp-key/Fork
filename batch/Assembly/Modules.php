<?php

namespace Fork\Bin\Assembly;

class Modules{

    public static function Start(){
	
	require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/Assay/Request.php';
	require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/Assay/Validation.php';
	
	require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/Session/SessionCreate.php';
	require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/Cookie/CookieCreate.php';
	
	require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/Assistant/Help.php';
	require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/Assistant/Exception.php';
	
	#require_once \Fork\Config\MainConfig::$ProjectPath.'bin/Modules/CMedia/ConvertMedia.php';
	
	/*
	   $SearchingParameters = sprintf('find Modules/ | grep "^./[^#].*Chief\.php$"');
	   exec($SearchingParameters,$Config);
	   
	   if(is_array($Config)){
	   foreach($Config as $IncludeConfig){
	   require_once $IncludeConfig;
	   }
	   }
	 */
    }
}
