<?php

namespace Fork\Assistant;

trait AssistantVariable {

    public static function See($Parameter){

	# Ecraning and output $Parameter
	echo htmlentities($Parameter);

	return true;
    }

    public static function Dump($Parameter,$Type = 1){
	
	echo '<pre style="background: #eaeaea;padding: 15px;font-size: 12px;font-family: Arial;box-shadow: 0 0 1px #bababa;color: #2f2f2f;word-spacing: 6px;line-height: 16px;">';

	if ($Type == 1)
	    var_dump($Parameter);
	else
	    print_r($Parameter);
	
	echo '</pre>';

	return true;
    }

    public static function Vars($Type = 1){

	echo '<pre style="background: #eaeaea;padding: 15px;font-size: 12px;font-family: Arial;box-shadow: 0 0 1px #bababa;color: #2f2f2f;word-spacing: 6px;line-height: 16px;">';

	if ($Type == 1)
	    var_dump(get_defined_vars());
	else
	    print_r(get_defined_vars());

	echo '</pre>';

	return true;
    }
}
