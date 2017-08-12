<?php

namespace Fork\Config\__NAME__;

use \Fork\Config\CgiConfig;

class Cgi extends CgiConfig{

    
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
