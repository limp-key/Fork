<?php

namespace Fork\Assembly;

class Project{

    public static function Load(){
	
	# LEVEL 0 (Parse level)
	# Include Parse
	# First parse client Request
	\Fork\Request\Parse::Start();
	#
	\Fork\Request\Clear::ENV();
	#
	\Fork\Request\Clear::GLOBALS();
	#
	\Fork\Request\Clear::REQUEST();
	
	
	# LEVEL 1 (Config level)
	# load all configs
	# first load default config
	# second load user configs
	\Fork\Assembly\Configs::Defaults()
	#
	\Fork\Assembly\Configs::Configs()
	
	
	# LEVEL 2 (Route level)
	# Include:
	#          User's Models      in models/
	#          User's Controllers in controllers/
	$Route = sprintf('%s/routes/Route.php', \Configs\Project::$Path);
	
	require_once $Route;
    }
}
