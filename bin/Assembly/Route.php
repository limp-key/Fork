<?php

$SearchingParameters = 'find ../route/ | grep ".php"';
exec($SearchingParameters,$Route);

if(is_array($Route)){
    foreach($Route as $IncludeRoute){
	require_once $IncludeRoute;
    }
}
