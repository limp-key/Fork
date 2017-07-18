<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletSystemConfig;

class SystemConfig extends SkeletSystemConfig{

    public $Precision = '14';

    public $OutputBuffering = '4096';

    public $OutputHandler = '';

    public $UrlRewriterTags = '';

    public $UrlRewriterHosts = '';

    public $ZlibOutputCompression = 'Off';

    public $ZlibOutputCompressionLevel = '-1';

    public $ZlibOutputHandler = '';

    public $ImplicitFlush = 'Off';

    public $UnserializeCallbackFunc = '';

    public $SerializePrecision = '-1';

    public $OpenBasedir = '';

    public $DisableFunctions = [];

    public $DisableClasses = [];

    public $IgnoreUserAbort = 'On';

    public $RealPathCacheSize = '16k';

    public $RealPathCacheTTL = '120';

    public $ZendEnableGC = 'On';

    public $ZendMultibyte = 'Off';

    public $ZendScriptEncoding = '';

    public $ExposePHP = 'On';

    public $MaxExecutionTime = '30';

    public $MaxInputTime = '60';

    public $MaxInputNestingLevel = '64';

    public $MaxInputVars = '1000';

    public $MemoryLimit = '128M';

    public $ErrorReporting = 'E_ALL & ~E_DEPRECATED & ~E_STRICT';

    public $DisplayErrors = 'Off';

    public $DisplayStartupErrors = 'Off';

    public $LogErrors = 'On';

    public $LogErrorsMaxLen = '1024';

    public $IgnoreRepeatedErrors = 'Off';
    
    public $IgnoreRepeatedSource = 'Off';

    public $ReportMemleaks = 'On';

    public $ReportZendDebug = '0';

    public $TrackErrors = 'Off';

    public $XMLrpcErrors = '0';

    public $XMLrpcErrorNumber = '0';

    public $HtmlErrors = 'On';

    public $ErrorPrependString = "<span style='color: ff0000'>";

    public $ErrorAppendString = "</span>";

    public $ErrorLog = 'syslog';
    
    public $ArgSeparatorOutput = "&amp";

    public $ArgSeparatorInput = "&";

    public $VariablesOrder = "GPCS";

    public $RequestOrder = "GP";

    public $RegisterArgcArgv = 'Off';
    
    public $AutoGlobalsJit = 'On';

    public $EnablePostDataReading = 'Off';

    public $PostMaxSize = '8M';

    public $AutoPrependFile = '';
    
    public $AutoAppendFile = '';
    
    public $DefaultMimetype = "text/html";

    public $DefaultCharset = "UTF-8";

    public $InternalEncoding = '';

    public $InputEncoding = '';

    public $OutputEncoding = '';

    public $ExtensionDir = "ext";

    public $SysTempDir = "/tmp";

    public $CgiForceRedirect = '1';

    public $CgiNph = '1';

    public $CgiRedirectStatusEnv = '';

    public $CgiFixPathinfo= '1';

    public $CgiDiscardPath= '1';

    public $FastcgiImpersonate = '1';

    public $FastcgiLogging = '0';

    public $CgiRfc2616Headers = '0';

    public $CgiCheckShebangLine= '1';

    public $FileUploads = 'On';

    public $UploadTmpDir = '';

    public $UploadMaxFilesize = '2M';

    public $MaxFileUploads = '20';

    public $AllowUrlFopen = 'On';

    public $AllowUrlInclude = 'Off';

    public $UserAgent="PHP";

    public $DefaultSocketTimeout = '60';

    public $AutoDetectLineEndings = 'Off';

    public $DateTimezone = '';

    public $DateDefaultLatitude = '31_7667';

    public $DateDefaultLongitude = '35_2333';

    public $DateSunriseZenith = '90_583333';

    public $DateSunsetZenith = '90_583333';

    public $PcreBacktrackLimit='100000';

    public $PcreRecursionLimit='100000';

    public $PcreJit='0';

    public $SessionSaveHandler = 'files';

    public $SessionSavePath = "/tmp";

    public $SessionUseStrictMode = '0';

    public $SessionUseCookies = '1';

    public $SessionCookieSecure = '';

    public $SessionUseOnlyCookies = '1';

    public $SessionName = 'PHPSESSID';

    public $SessionAutoStart = '0';

    public $SessionCookieLifetime = '0';

    public $SessionCookiePath = '/';

    public $SessionCookieDomain = '';

    public $SessionCookieHttponly = '';

    public $SessionSerializeHandler = 'php';

    public $SessionGCProbability = '1';

    public $SessionGCDivisor = '1000';

    public $SessionGCMaxlifetime = '1440';

    public $SessionRefererCheck = '';

    public $SessionCacheLimiter = 'nocache';

    public $SessionCacheExpire = '180';

    public $SessionUseTransSid = '0';

    public $SessionSidLength = '26';

    public $SessionTransSidTags = "a=href,area=href,frame=src,form=";

    public $SessionTransSidHosts="";

    public $SessionSidBitsPerCharacter = '5';

    public $SessionUploadProgressEnabled = 'On';

    public $SessionUploadProgressCleanup = 'On';

    public $SessionUploadProgressPrefix = "upload_progress_";

    public $SessionUploadProgressName = "PHP_SESSION_UPLOAD_PROGRESS";

    public $SessionUploadProgressFreq =  "1%";

    public $SessionUploadProgressMinFreq = "1";

    public $SessionLazyWrite = 'On';

}
