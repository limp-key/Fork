<?php

namespace Embranchment\Helper;

trait AssistantVariable {

    /*
     * 	Ecraning and output variable
     *
     *  @param Parameter
     */
    public static function See($Parameter) {

	echo htmlentities($Parameter);
    }

    /*
     * Dumping variable
     * 
     * @param Parameter
     * @param Type
     */
    public static function Dump($Parameter, $Type = 1) {

	if ($Type == 1) {
	    $Var = var_dump($Parameter);
	} else {
	    $Var = print_r($Parameter);    
	}
	
	printf('<pre style="background:#eaeaea;
                            padding:15px;
                            font-size:12px;
                            font-family:Arial;
                            box-shadow: 0 0 1px #bababa;
                            color:#2f2f2f;
                            word-spacing:6px;
                            line-height:16px;">%s</pre>', $Var);
    }

    /*
     * View all defined variables
     *
     * @param Type
     */
    public static function Vars($Type = 1){

	if ($Type == 1) {
	    $Var = var_dump(get_defined_vars());
	} else {
	    $Var = print_r(get_defined_vars());
	}
	
	printf('<pre style="background:#eaeaea;
                            padding:15px;
                            font-size:12px;
                            font-family:Arial;
                            box-shadow: 0 0 1px #bababa;
                            color:#2f2f2f;
                            word-spacing:6px;
                            line-height:16px;">%s</pre>', $Var);
    }
}
