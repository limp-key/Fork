<?php

namespace Fork\Assembly;

class Project{

    public static function Load(){

	# LEVEL 0 (Parse level)
	# Include Parse, Route, Config classes
	# First parse client Request
	# and Include user's Config in this project
	# and assay Route
	\Fork\Request\Parse::Start();

	\Fork\Request\Clear::ENV();

	\Fork\Request\Clear::GLOBALS();

	\Fork\Request\Clear::REQUEST();

	# Load config

	\Fork\Assembly\Configs::Defaults();

	\Fork\Assembly\Configs::Configs();
	
	# LEVEL 2 (Assembly level)
	# Include:
	#          User's Models      in models/
	#          User's Controllers in controllers/
	include \Configs\Project::$Path.'routes/Route.php';
    }
}
