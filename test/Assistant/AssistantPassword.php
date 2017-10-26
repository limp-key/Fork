<?php

namespace \Embranchment\Assistant;

class AssistantPassword {

    /* 
     * Hashing password 
     *
     * @param Password
     * @param Cost
     */
    public static function hashing($Password, $Cost = 10) {

	$Options = [
	    'cost' => $Cost
	];

	return password_hash($Password, PASSWORD_BCRYPT, $Options);
    }

    /*
     * Verify password and hash
     *
     * @param Password
     * @param Hash
     */
    public static function verify($Password, $Hash) {

	return password_verify($Password, $Hash);
    }
}
