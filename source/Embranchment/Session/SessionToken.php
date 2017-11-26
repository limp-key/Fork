<?php

namespace Embranchment\Session;

use \Embranchment\Session\SessionVerification as Session;

class SessionToken {

    /*
     * Generate token for this session
     */
    public static function Generate() {
	
	if (!SESSION::IsStarted()) session_start();

	$_SESSION['token'] = hash('sha512',rand());
    }
}
