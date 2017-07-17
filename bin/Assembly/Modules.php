<?php

require_once 'Modules/Assay/Request.php';
require_once 'Modules/Assay/Validation.php';

require_once 'Modules/Session/SessionCreate.php';
require_once 'Modules/Cookie/CookieCreate.php';

require_once 'Modules/Assistant/Help.php';
require_once 'Modules/Assistant/Exception.php';

require_once 'Modules/CMedia/ConvertMedia.php';

/*

$SearchingParameters = "find Modules/ | grep '^./[^#].*Chief\.php$'";
exec($SearchingParameters,$Config);

if(is_array($Config)){
    foreach($Config as $IncludeConfig){
	require_once $IncludeConfig;
    }
}
*/
