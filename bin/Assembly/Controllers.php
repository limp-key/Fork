<?php

function SearchControllers(){

    $SearchingParameters = 'find ../controllers/ | grep ".php"';

    exec($SearchingParameters,$Controllers);
    
    if(!empty($Controllers))
	return $Controllers;
    else
	return false;	
}
