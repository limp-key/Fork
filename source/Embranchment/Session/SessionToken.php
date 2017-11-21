<?php

namespace Embranchment\Session;

class SessionToken {

    /*
     * Generate token for this session
     */
    public static function Generate() {
	
	if (!session_status()) session_start();

	$_SESSION['token'] = hash('sha512',rand());
    }
}
