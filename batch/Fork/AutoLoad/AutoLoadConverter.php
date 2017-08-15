<?php

namespace Fork\AutoLoad;

trait AutoLoadConverter {

    public static function NameSpaceToUserPath($NameSpace) {
	
	# Convert namespace to file path
	$File = str_replace('\\', '/', $NameSpace);

	# Add .php extension for file path
	$File = sprintf('%s.php', $File);

	# Add path project to file controller
	$File = sprintf('%s/%s', \Configs\Project::$Path, $File);

	return $File;
    }

    public static function NameSpaceToModulesPath($NameSpace){

	# Convert namespace to file path
	$File = str_replace('\\', '/', $NameSpace);

	# Add .php extension for file path
	$File = sprintf('../batch/%s.php', $File);

	return $File;

    }

    public static function NameSpaceToConfigsPath($NameSpace) {
	
	# Convert namespace to file path
	$File = str_replace('\\', '/', $NameSpace);
	
	# Add .php extension for file path
	$File = sprintf('../%s.php', $File);

	return $File;
    }
}
