<?php

namespace Embranchment\Helper;

class Variable {

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
    public static function Dump($Parameter) {

	echo '<pre style="background:#eaeaea;
                          padding:15px;
                          font-size:12px;
                          font-family:Arial;
                          box-shadow: 0 0 1px #bababa;
                          color:#2f2f2f;
                          word-spacing:6px;
                          line-height:16px;">';
	var_dump($Parameter);
	echo '</pre>';
    }

    /*
     * View all defined variables
     *
     * @param Type
     */
    public static function Vars(){

	echo '<pre style="background:#eaeaea;
                          padding:15px;
                          font-size:12px;
                          font-family:Arial;
                          box-shadow: 0 0 1px #bababa;
                          color:#2f2f2f;
                          word-spacing:6px;
                          line-height:16px;">';
	var_dump(get_defined_vars());
	echo '</pre>';
	
    }
}
