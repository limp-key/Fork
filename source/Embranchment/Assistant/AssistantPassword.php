<?php

class AssistantPassword {

    public static function hashing($Password, $Cost = 10) {

	$Options = [
	    'cost' => $Cost,
	    'salt' => bin2hex(random_bytes(80));
	];

	return password_hash($Password, PASSWORD_BCRYPT, $Options);
    }

    public static function verify($Password, $Hash) {

	return password_verify($Password, $Hash);
    }
}
