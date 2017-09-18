<?php

namespace Embranchment\View;

trait ViewGenerateToken {

    public static function Token(){

	echo $_SESSION['Token'];
	
	return true;
    }
}
