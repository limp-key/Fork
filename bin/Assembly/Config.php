<?php

$SearchingParameters = 'find ../config/ | grep ".conf.php"';
exec($SearchingParameters,$Config);

if(is_array($Config)){
    foreach($Config as $IncludeConfig){
	require_once $IncludeConfig;
    }
}
