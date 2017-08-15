<?php

namespace Fork\Assembly;

class Project{

    public static function Load(){

	try{
	    
	    # LEVEL 0 (Parse level)
	    # Include Parse, Route, Config classes
	    # First parse client Request
	    # and Include user's Config in this project
	    # and assay Route

	    $Parse = \Fork\Request\Parse::Start();
	    
	    if (!$Parse) {

		throw new \Exception();
	    }

	    $ENV = \Fork\Request\Clear::ENV();
	    
	    if (!$ENV) {

		throw new \Exception();
	    }

	    $GLOBALS = \Fork\Request\Clear::GLOBALS();
	    
	    if (!$GLOBALS) {

		throw new \Exception();
	    }

	    $REQUEST = \Fork\Request\Clear::REQUEST();
	    if (!$REQUEST) {

		throw new \Exception();
	    }
	    
	    # Load config

	    if ( ! \Fork\Assembly\Configs::Defaults()) {

		throw new \Exception();
	    }

	    if ( ! \Fork\Assembly\Configs::Configs()) {

		throw new \Exception();
	    }
	    
	    # LEVEL 2 (Assembly level)
	    # Include:
	    #          User's Models      in models/
	    #          User's Controllers in controllers/
	    require_once \Configs\Project::$Path.'routes/Route.php';

	} catch (\Exception $e) {
	    
	}
    }
}
