<?php

$ConfigDIR = $GLOBALS['response_config'];

$SearchingParameters = 'find ../config/'.$ConfigDIR.' | grep ".Config.php"';

exec($SearchingParameters,$Config);

if(is_array($Config)){
    foreach($Config as $IncludeConfig){
	require_once $IncludeConfig;
    }
}


