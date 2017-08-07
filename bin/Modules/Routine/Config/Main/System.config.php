<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletSystemConfig;

class SystemConfig extends SkeletSystemConfig{

    public static $MaxExecutionTime = '30';

    public static $MemoryLimit = '128M';
    
    public static $DefaultMimetype = "text/html";

    public static $DefaultCharset = "UTF-8";

    #public static $MaxInputTime = '60';
    
    #public static $MaxInputNestingLevel = '64';

    #public static $MaxInputVars = '1000';

    #public static $PostMaxSize = '8M';

    #public static $EnablePostDataReading = 'On';

    public static $InternalEncoding = '';

    public static $InputEncoding = '';

    public static $OutputEncoding = '';
}
