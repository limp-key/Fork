<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletOtherConfig;

class OtherConfig extends SkeletOtherConfig{

    public static $Precision = '14';

    public static $OutputBuffering = '4096';

    public static $OutputHandler = '';

    public static $UrlRewriterTags = '';

    public static $UrlRewriterHosts = '';
    
    public static $ImplicitFlush = 'Off';

    public static $UnserializeCallbackFunc = '';

    public static $SerializePrecision = '-1';

    public static $OpenBasedir = '';

    public static $DisableFunctions = '';

    public static $DisableClasses = '';

    public static $IgnoreUserAbort = 'On';

    public static $RealPathCacheSize = '16k';

    public static $RealPathCacheTTL = '120';

    public static $ExposePHP = 'Off';

    public static $ArgSeparatorOutput = "&amp";

    public static $ArgSeparatorInput = "&";

    public static $VariablesOrder = "GPCS";

    public static $RequestOrder = "GP";

    public static $RegisterArgcArgv = 'Off';
    
    public static $AutoGlobalsJit = 'On';

    public static $ExtensionDir = "ext";

    public static $SysTempDir = "/tmp";

    public static $AllowUrlFopen = 'On';

    public static $AllowUrlInclude = 'Off';

    public static $DefaultSocketTimeout = '60';

    public static $AutoDetectLineEndings = 'Off';
}
