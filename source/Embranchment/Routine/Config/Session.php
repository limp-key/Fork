<?php

namespace Configs;

use \Embranchment\Config\Custom\SkeletSessionConfig;

class Session extends SkeletSessionConfig{

    public static $SessionSaveHandler = 'files';

    public static $SessionSavePath = "/tmp";

    public static $SessionUseStrictMode = '0';

    public static $SessionUseCookies = '1';

    public static $SessionCookieSecure = '';

    public static $SessionUseOnlyCookies = '0';

    public static $SessionName = 'UID';

    public static $SessionAutoStart = '0';

    public static $SessionCookieLifetime = '0';

    public static $SessionCookiePath = '/';

    public static $SessionCookieDomain = '';

    public static $SessionCookieHttponly = '';

    public static $SessionSerializeHandler = 'php';

    public static $SessionGCProbability = '0';

    public static $SessionGCDivisor = '1000';

    public static $SessionGCMaxlifetime = '1440';

    public static $SessionRefererCheck = '';

    public static $SessionCacheLimiter = 'nocache';

    public static $SessionCacheExpire = '180';

    public static $SessionUseTransSid = '0';

    public static $SessionSidLength = '26';

    public static $SessionTransSidTags = "a=href,area=href,frame=src,form=";

    public static $SessionTransSidHosts="";

    public static $SessionSidBitsPerCharacter = '5';

    public static $SessionUploadProgressEnabled = 'On';

    public static $SessionUploadProgressCleanup = 'On';

    public static $SessionUploadProgressPrefix = "upload_progress_";

    public static $SessionUploadProgressName = "PHP_SESSION_UPLOAD_PROGRESS";

    public static $SessionUploadProgressFreq =  "1%";

    public static $SessionUploadProgressMinFreq = "1";

    public static $SessionLazyWrite = 'On';

}
