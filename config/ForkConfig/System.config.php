<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletSystemConfig;

class SystemConfig extends SkeletSystemConfig{

    public static $Precision = '14';

    public static $OutputBuffering = '4096';

    public static $OutputHandler = '';

    public static $UrlRewriterTags = '';

    public static $UrlRewriterHosts = '';

    public static $ZlibOutputCompression = 'Off';

    public static $ZlibOutputCompressionLevel = '-1';

    public static $ZlibOutputHandler = '';

    public static $ImplicitFlush = 'Off';

    public static $UnserializeCallbackFunc = '';

    public static $SerializePrecision = '-1';

    public static $OpenBasedir = '';

    public static $DisableFunctions = [];

    public static $DisableClasses = [];

    public static $IgnoreUserAbort = 'On';

    public static $RealPathCacheSize = '16k';

    public static $RealPathCacheTTL = '120';

    public static $ZendEnableGC = 'On';

    public static $ZendMultibyte = 'Off';

    public static $ZendScriptEncoding = '';

    public static $ExposePHP = 'On';

    public static $MaxExecutionTime = '30';

    public static $MaxInputTime = '60';

    public static $MaxInputNestingLevel = '64';

    public static $MaxInputVars = '1000';

    public static $MemoryLimit = '128M';

    public static $ErrorReporting = 'E_ALL & ~E_DEPRECATED & ~E_STRICT';

    public static $DisplayErrors = 'Off';

    public static $DisplayStartupErrors = 'Off';

    public static $LogErrors = 'On';

    public static $LogErrorsMaxLen = '1024';

    public static $IgnoreRepeatedErrors = 'Off';
    
    public static $IgnoreRepeatedSource = 'Off';

    public static $ReportMemleaks = 'On';

    public static $ReportZendDebug = '0';

    public static $TrackErrors = 'Off';

    public static $XMLrpcErrors = '0';

    public static $XMLrpcErrorNumber = '0';

    public static $HtmlErrors = 'On';

    public static $ErrorPrependString = "<span style='color: ff0000'>";

    public static $ErrorAppendString = "</span>";

    public static $ErrorLog = 'syslog';
    
    public static $ArgSeparatorOutput = "&amp";

    public static $ArgSeparatorInput = "&";

    public static $VariablesOrder = "GPCS";

    public static $RequestOrder = "GP";

    public static $RegisterArgcArgv = 'Off';
    
    public static $AutoGlobalsJit = 'On';

    public static $EnablePostDataReading = 'Off';

    public static $PostMaxSize = '8M';

    public static $AutoPrependFile = '';
    
    public static $AutoAppendFile = '';
    
    public static $DefaultMimetype = "text/html";

    public static $DefaultCharset = "UTF-8";

    public static $InternalEncoding = '';

    public static $InputEncoding = '';

    public static $OutputEncoding = '';

    public static $ExtensionDir = "ext";

    public static $SysTempDir = "/tmp";

    public static $CgiForceRedirect = '1';

    public static $CgiNph = '1';

    public static $CgiRedirectStatusEnv = '';

    public static $CgiFixPathinfo= '1';

    public static $CgiDiscardPath= '1';

    public static $FastcgiImpersonate = '1';

    public static $FastcgiLogging = '0';

    public static $CgiRfc2616Headers = '0';

    public static $CgiCheckShebangLine= '1';

    public static $FileUploads = 'On';

    public static $UploadTmpDir = '';

    public static $UploadMaxFilesize = '2M';

    public static $MaxFileUploads = '20';

    public static $AllowUrlFopen = 'On';

    public static $AllowUrlInclude = 'Off';

    public static $UserAgent="PHP";

    public static $DefaultSocketTimeout = '60';

    public static $AutoDetectLineEndings = 'Off';

    public static $DateTimezone = '';

    public static $DateDefaultLatitude = '31_7667';

    public static $DateDefaultLongitude = '35_2333';

    public static $DateSunriseZenith = '90_583333';

    public static $DateSunsetZenith = '90_583333';

    public static $PcreBacktrackLimit='100000';

    public static $PcreRecursionLimit='100000';

    public static $PcreJit='0';

    public static $SessionSaveHandler = 'files';

    public static $SessionSavePath = "/tmp";

    public static $SessionUseStrictMode = '0';

    public static $SessionUseCookies = '1';

    public static $SessionCookieSecure = '';

    public static $SessionUseOnlyCookies = '1';

    public static $SessionName = 'PHPSESSID';

    public static $SessionAutoStart = '0';

    public static $SessionCookieLifetime = '0';

    public static $SessionCookiePath = '/';

    public static $SessionCookieDomain = '';

    public static $SessionCookieHttponly = '';

    public static $SessionSerializeHandler = 'php';

    public static $SessionGCProbability = '1';

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
