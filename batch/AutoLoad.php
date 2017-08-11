<?php

namespace bin\;

class AutoLoad{

    public static function Load(){
	
	\Fork\Bin\Request\Parse::Start();


	#\Fork\Bin\Assembly\Route::Start();
    }

    public static function(){
	
    }
}


# LEVEL 0 (Parse level)
# Include Parse, Route, Config classes
# First parse client Request
# and Include user's Config in this project
# and assay Route



# LEVEL 1 (Skelet level)


spl_autoload_register();

# LEVEL 2 (Assembly level)
# Include:
#          User's Models      in models/
#          User's Controllers in controllers/
#
spl_autoload_register('Assembly\Controller::Start()');
#
spl_autoload_register('Assembly\Models::Start()');
#
spl_autoload_register('Assembly\Config::Start()');
#
spl_autoload_register('Assembly\Route::Start()');
#
spl_autoload_register('Assembly\Main::Start()');
#

#

# Run Fork Framework
AutoLoad::Load();
