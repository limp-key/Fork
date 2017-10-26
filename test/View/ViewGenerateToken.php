<?php

namespace Embranchment\View;

trait ViewGenerateToken {

    /*
     * View token in Session variable
     * 
     * @return mixed
     */
    public static function Token(){

	echo $_SESSION['Token'];
	
	return true;
    }
}
