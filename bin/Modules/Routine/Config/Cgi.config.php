<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletCgiConfig;

class CgiConfig extends SkeletCgiConfig{

    
    public static $CgiForceRedirect = '1';

    public static $CgiNph = '1';

    public static $CgiRedirectStatusEnv = '';

    public static $CgiFixPathinfo= '1';

    public static $CgiDiscardPath= '1';

    public static $FastcgiImpersonate = '1';

    public static $FastcgiLogging = '0';

    public static $CgiRfc2616Headers = '0';

    public static $CgiCheckShebangLine= '1';
}
