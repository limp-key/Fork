<?php

namespace \Embranchment\Assistant;

class AssistantPassword {

    public static function hashing($Password, $Cost = 10) {

	$Options = [
	    'cost' => $Cost
	];

	return password_hash($Password, PASSWORD_BCRYPT, $Options);
    }

    public static function verify($Password, $Hash) {

	return password_verify($Password, $Hash);
    }
}
