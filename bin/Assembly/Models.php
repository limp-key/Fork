<?php

function SearchModels(){

    $SearchingParameters = 'find ../models/ | grep ".php"';

    exec($SearchingParameters,$Models);

    if(!empty($Models))
	return $Models;
    else
	return false;
}
