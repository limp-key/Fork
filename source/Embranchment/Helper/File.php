<?php

namespace Embranchment\Helper;

class File {

    /*
     * Executes the file and returns it as a string
     *
     * @param string
     * @param array
     *
     * @return resource or false
     */
    public static function GetIncludeContents($File, $Parameters = array()) {

	extract($Parameters);
	
	if (is_file($File)) {

	    ob_start();

	    include $File;

	    return ob_get_clean();
	}
	return false;
    }
}
