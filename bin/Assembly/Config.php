<?php

namespace Fork\Bin\Assembly;

class Config{

    public static function Start($AdditionalConfig){

	$SearchingParameters = 'find ../config/ -maxdepth 1 | grep ".config.php"';
	
	exec($SearchingParameters,$Config);

	if(is_array($Config)){
	    foreach($Config as $IncludeConfig){
		require_once $IncludeConfig;
	    }
	}
	
	if($AdditionalConfig){
	    $SearchingParameters = 'find ../config/'.$AdditionalConfig.' | grep ".config.php"';

	    exec($SearchingParameters,$Config);

	    if(is_array($Config)){
		foreach($Config as $IncludeConfig){
		    require_once $IncludeConfig;
		}
	    }
	}		
    }

    public static function Default(){
	
	Fork\Config\SystemConfig::Precision($Parameter);

	Fork\Config\SystemConfig::UrlRewriterTags($Parameter);

	Fork\Config\SystemConfig::UrlRewriterHosts($Parameter);

	Fork\Config\SystemConfig::ZendEnableGC($Parameter);

	Fork\Config\SystemConfig::ZendMultibyte($Parameter);

	Fork\Config\SystemConfig::ZendScriptEncoding($Parameter);

	Fork\Config\SystemConfig::OpenBasedir($Parameter);

	Fork\Config\SystemConfig::DisableFunctions($Parameter);

	Fork\Config\SystemConfig::DisableClasses($Parameter);

	Fork\Config\SystemConfig::UserAgent($Parameter);

	Fork\Config\SystemConfig::DefaultSocketTimeout($Parameter);

	Fork\Config\SystemConfig::AutoDetectLineEndings($Parameter);

    }

    public static function Main(){

	# Other
	
	Fork\Config\OtherConfig::ArgSeparatorOutput($Parameter);

	Fork\Config\OtherConfig::ArgSeparatorInput($Parameter);

	Fork\Config\OtherConfig::VariablesOrder($Parameter);

	Fork\Config\OrherConfig::RequestOrder($Parameter);

	Fork\Config\OtherConfig::RegisterArgcArgv($Parameter);

	Fork\Config\OtherConfig::AutoGlobalsJit($Parameter);

	Fork\Config\OtherConfig::OutputBuffering($Parameter);

	Fork\Config\OtherConfig::OutputHandler($Parameter);

	Fork\Config\OtherConfig::ImplicitFlush($Parameter);

	Fork\Config\OtherConfig::UnserializeCallbackFunc($Parameter);

	Fork\Config\OtherConfig::SerializePrecision($Parameter);

	Fork\Config\OtherConfig::RealPathCacheSize($Parameter);

	Fork\Config\OtherConfig::RealPathCacheTTL($Parameter);

	Fork\Config\OtherConfig::ExposePHP($Parameter);

	# System

	Fork\Config\SystemConfig::IgnoreUserAbort($Parameter);

	Fork\Config\SystemConfig::MaxExecutionTime($Parameter);

	Fork\Config\SystemConfig::MaxInputTime($Parameter);

	Fork\Config\SystemConfig::MaxInputNestingLevel($Parameter);
 
	Fork\Config\SystemConfig::MaxInputVars($Parameter);

	Fork\Config\SystemConfig::MemoryLimit($Parameter);

	Fork\Config\SystemConfig::IgnoreRepeatedSource($Parameter);

	Fork\Config\SystemConfig::ReportMemleaks($Parameter);

	Fork\Config\SystemConfig::ReportZendDebug($Parameter);

	Fork\Config\SystemConfig::EnablePostDataReading($Parameter);

	Fork\Config\SystemConfig::PostMaxSize($Parameter);

	Fork\Config\SystemConfig::DefaultMimetype($Parameter);

	Fork\Config\SystemConfig::DefaultCharset($Parameter);

	Fork\Config\SystemConfig::InternalEncoding($Parameter);

	Fork\Config\SystemConfig::InputEncoding($Parameter);

	Fork\Config\SystemConfig::OutputEncoding($Parameter);

	Fork\Config\SystemConfig::ExtensionDir($Parameter);

	Fork\Config\SystemConfig::SysTempDir($Parameter);

	# Zlib

	Fork\Config\ZlibConfig::ZlibOutputCompression($Parameter);

	Fork\Config\ZlibConfig::ZlibOutputCompressionLevel($Parameter);

	Fork\Config\ZlibConfig::ZlibOutputHandler($Parameter);
	
	# Error

	Fork\Config\ErrorConfig::HtmlErrors($Parameter);

	Fork\Config\ErrorConfig::ErrorPrependString($Parameter);

	Fork\Config\ErrorConfig::ErrorAppendString($Parameter);

	Fork\Config\ErrorConfig::ErrorLog($Parameter);

	Fork\Config\ErrorConfig::ErrorReporting($Parameter);

	Fork\Config\ErrorConfig::DisplayErrors($Parameter);

	Fork\Config\ErrorConfig::DisplayStartupErrors($Parameter);

	Fork\Config\ErrorConfig::LogErrors($Parameter);

	Fork\Config\ErrorConfig::LogErrorsMaxLen($Parameter);

	Fork\Config\ErrorConfig::IgnoreRepeatedErrors($Parameter);
	
	Fork\Config\SystemConfig::XMLrpcErrors($Parameter);

	Fork\Config\SystemConfig::XMLrpcErrorNumber($Parameter);

	Fork\Config\SystemConfig::TrackErrors($Parameter);
	
	# Cgi

	Fork\Config\CgiConfig::CgiForceRedirect($Parameter);

	Fork\Config\CgiConfig::CgiNPH($Parameter);

	Fork\Config\CgiConfig::CgiRedirectStatusEnv($Parameter);

	Fork\Config\CgiConfig::CgiFixPathinfo($Parameter);

	Fork\Config\CgiConfig::CgiDiscardPath($Parameter);

	Fork\Config\CgiConfig::FastcgiImpersonate($Parameter);

	Fork\Config\CgiConfig::FastcgiLogging($Parameter);

	Fork\Config\CgiConfig::Cgirfc2616Headers($Parameter);

	Fork\Config\CgiConfig::CgiCheckShebangLine($Parameter);

	# File
	
	Fork\Config\FileConfig::FileUploads($Parameter);

	Fork\Config\FileConfig::UploadTmpDir($Parameter);

	Fork\Config\FileConfig::UploadMaxFilesize($Parameter);

	Fork\Config\FileConfig::MaxFileUploads($Parameter);

	Fork\Config\FileConfig::AllowURLFopen($Parameter);

	Fork\Config\FileConfig::AllowURLInclude($Parameter);

	Fork\Config\FileConfig::AutoPrependFile($Parameter);

	Fork\Config\FileConfig::AutoAppendFile($Parameter);
	
	# Date

	Fork\Config\DateConfig::DateTimezone($Parameter);

	Fork\Config\DateConfig::DateDefaultLatitude($Parameter);

	Fork\Config\DateConfig::DateDefaultLongitude($Parameter);

	Fork\Config\DateConfig::DateSunriseZenith($Parameter);

	Fork\Config\DateConfig::DateSunsetZenith($Parameter);

	# PCRE

	Fork\Config\PCREConfig::PcreBacktrackLimit($Parameter);

	Fork\Config\PCREConfig::PcreRecursionLimit($Parameter);

	Fork\Config\PCREConfig::PcreJit($Parameter);

	# Session

	Fork\Config\SessionConfig::SessionSaveHandler($Parameter);

	Fork\Config\SessionConfig::SessionSavePath($Parameter);

	Fork\Config\SessionConfig::SessionUseStrictMode($Parameter);

	Fork\Config\SessionConfig::SessionUseCookies($Parameter);

	Fork\Config\SessionConfig::SessionCookieSecure($Parameter);

	Fork\Config\SessionConfig::SessionUseOnlyCookies($Parameter);

	Fork\Config\SessionConfig::SessionName($Parameter);

	Fork\Config\SessionConfig::SessionAutoStart($Parameter);

	Fork\Config\SessionConfig::SessionCookieLifetime($Parameter);

	Fork\Config\SessionConfig::SessionCookiePath($Parameter);

	Fork\Config\SessionConfig::SessionCookieDomain($Parameter);

	Fork\Config\SessionConfig::SessionCookieHttponly($Parameter);

	Fork\Config\SessionConfig::SessionSerializeHandler($Parameter);

	Fork\Config\SessionConfig::SessionGCProbability($Parameter);

	Fork\Config\SessionConfig::SessionGCDivisor($Parameter);

	Fork\Config\SessionConfig::SessionGCMaxlifetime($Parameter);

	Fork\Config\SessionConfig::SessionRefererCheck($Parameter);

	Fork\Config\SessionConfig::SessionCacheLimiter($Parameter);

	Fork\Config\SessionConfig::SessionCacheExpire($Parameter);

	Fork\Config\SessionConfig::SessionUseTransSid($Parameter);

	Fork\Config\SessionConfig::SessionSidLength($Parameter);

	Fork\Config\SessionConfig::SessionTransSidTags($Parameter);

	Fork\Config\SessionConfig::SessionTransSidHosts($Parameter);

	Fork\Config\SessionConfig::SessionSidBitsPerCharacter($Parameter);

	Fork\Config\SessionConfig::SessionUploadProgressEnabled($Parameter);

	Fork\Config\SessionConfig::SessionUploadProgressCleanup($Parameter);

	Fork\Config\SessionConfig::SessionUploadProgressPrefix($Parameter);

	Fork\Config\SessionConfig::SessionUploadProgressName($Parameter);

	Fork\Config\SessionConfig::SessionUploadProgressFreq($Parameter);

	Fork\Config\SessionConfig::SessionUploadProgressMinFreq($Parameter);

	Fork\Config\SessionConfig::SessionLazyWrite($Parameter);
	
    }
    
    public static function Additional($Config){

	# Other
	
	Fork\Config\$Config\OtherConfig::ArgSeparatorOutput($Parameter);

	Fork\Config\$Config\OtherConfig::ArgSeparatorInput($Parameter);

	Fork\Config\$Config\OtherConfig::VariablesOrder($Parameter);

	Fork\Config\$Config\OrherConfig::RequestOrder($Parameter);

	Fork\Config\$Config\OtherConfig::RegisterArgcArgv($Parameter);

	Fork\Config\$Config\OtherConfig::AutoGlobalsJit($Parameter);

	Fork\Config\$Config\OtherConfig::OutputBuffering($Parameter);

	Fork\Config\$Config\OtherConfig::OutputHandler($Parameter);

	Fork\Config\$Config\OtherConfig::ImplicitFlush($Parameter);

	Fork\Config\$Config\OtherConfig::UnserializeCallbackFunc($Parameter);

	Fork\Config\$Config\OtherConfig::SerializePrecision($Parameter);

	Fork\Config\$Config\OtherConfig::RealPathCacheSize($Parameter);

	Fork\Config\$Config\OtherConfig::RealPathCacheTTL($Parameter);

	Fork\Config\$Config\OtherConfig::ExposePHP($Parameter);

	# System

	Fork\Config\$Config\SystemConfig::IgnoreUserAbort($Parameter);

	Fork\Config\$Config\SystemConfig::MaxExecutionTime($Parameter);

	Fork\Config\$Config\SystemConfig::MaxInputTime($Parameter);

	Fork\Config\$Config\SystemConfig::MaxInputNestingLevel($Parameter);
	
	Fork\Config\$Config\SystemConfig::MaxInputVars($Parameter);

	Fork\Config\$Config\SystemConfig::MemoryLimit($Parameter);

	Fork\Config\$Config\SystemConfig::IgnoreRepeatedSource($Parameter);

	Fork\Config\$Config\SystemConfig::ReportMemleaks($Parameter);

	Fork\Config\$Config\SystemConfig::ReportZendDebug($Parameter);

	Fork\Config\$Config\SystemConfig::EnablePostDataReading($Parameter);

	Fork\Config\$Config\SystemConfig::PostMaxSize($Parameter);

	Fork\Config\$Config\SystemConfig::DefaultMimetype($Parameter);

	Fork\Config\$Config\SystemConfig::DefaultCharset($Parameter);

	Fork\Config\$Config\SystemConfig::InternalEncoding($Parameter);

	Fork\Config\$Config\SystemConfig::InputEncoding($Parameter);

	Fork\Config\$Config\SystemConfig::OutputEncoding($Parameter);

	Fork\Config\$Config\SystemConfig::ExtensionDir($Parameter);

	Fork\Config\$Config\SystemConfig::SysTempDir($Parameter);

	# Zlib

	Fork\Config\$Config\ZlibConfig::ZlibOutputCompression($Parameter);

	Fork\Config\$Config\ZlibConfig::ZlibOutputCompressionLevel($Parameter);

	Fork\Config\$Config\ZlibConfig::ZlibOutputHandler($Parameter);
	
	# Error

	Fork\Config\$Config\ErrorConfig::HtmlErrors($Parameter);

	Fork\Config\$Config\ErrorConfig::ErrorPrependString($Parameter);

	Fork\Config\$Config\ErrorConfig::ErrorAppendString($Parameter);

	Fork\Config\$Config\ErrorConfig::ErrorLog($Parameter);

	Fork\Config\$Config\ErrorConfig::ErrorReporting($Parameter);

	Fork\Config\$Config\ErrorConfig::DisplayErrors($Parameter);

	Fork\Config\$Config\ErrorConfig::DisplayStartupErrors($Parameter);

	Fork\Config\$Config\ErrorConfig::LogErrors($Parameter);

	Fork\Config\$Config\ErrorConfig::LogErrorsMaxLen($Parameter);

	Fork\Config\$Config\ErrorConfig::IgnoreRepeatedErrors($Parameter);
	
	Fork\Config\$Config\SystemConfig::XMLrpcErrors($Parameter);

	Fork\Config\$Config\SystemConfig::XMLrpcErrorNumber($Parameter);

	Fork\Config\$Config\SystemConfig::TrackErrors($Parameter);
	
	# Cgi

	Fork\Config\$Config\CgiConfig::CgiForceRedirect($Parameter);

	Fork\Config\$Config\CgiConfig::CgiNPH($Parameter);

	Fork\Config\$Config\CgiConfig::CgiRedirectStatusEnv($Parameter);

	Fork\Config\$Config\CgiConfig::CgiFixPathinfo($Parameter);

	Fork\Config\$Config\CgiConfig::CgiDiscardPath($Parameter);

	Fork\Config\$Config\CgiConfig::FastcgiImpersonate($Parameter);

	Fork\Config\$Config\CgiConfig::FastcgiLogging($Parameter);

	Fork\Config\$Config\CgiConfig::Cgirfc2616Headers($Parameter);

	Fork\Config\$Config\CgiConfig::CgiCheckShebangLine($Parameter);

	# File
	
	Fork\Config\$Config\FileConfig::FileUploads($Parameter);

	Fork\Config\$Config\FileConfig::UploadTmpDir($Parameter);

	Fork\Config\$Config\FileConfig::UploadMaxFilesize($Parameter);

	Fork\Config\$Config\FileConfig::MaxFileUploads($Parameter);

	Fork\Config\$Config\FileConfig::AllowURLFopen($Parameter);

	Fork\Config\$Config\FileConfig::AllowURLInclude($Parameter);

	Fork\Config\$Config\FileConfig::AutoPrependFile($Parameter);

	Fork\Config\$Config\FileConfig::AutoAppendFile($Parameter);
	
	# Date

	Fork\Config\$Config\DateConfig::DateTimezone($Parameter);

	Fork\Config\$Config\DateConfig::DateDefaultLatitude($Parameter);

	Fork\Config\$Config\DateConfig::DateDefaultLongitude($Parameter);

	Fork\Config\$Config\DateConfig::DateSunriseZenith($Parameter);

	Fork\Config\$Config\DateConfig::DateSunsetZenith($Parameter);

	# PCRE

	Fork\Config\$Config\PCREConfig::PcreBacktrackLimit($Parameter);

	Fork\Config\$Config\PCREConfig::PcreRecursionLimit($Parameter);

	Fork\Config\$Config\PCREConfig::PcreJit($Parameter);

	# Session

	Fork\Config\$Config\SessionConfig::SessionSaveHandler($Parameter);

	Fork\Config\$Config\SessionConfig::SessionSavePath($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUseStrictMode($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUseCookies($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCookieSecure($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUseOnlyCookies($Parameter);

	Fork\Config\$Config\SessionConfig::SessionName($Parameter);

	Fork\Config\$Config\SessionConfig::SessionAutoStart($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCookieLifetime($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCookiePath($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCookieDomain($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCookieHttponly($Parameter);

	Fork\Config\$Config\SessionConfig::SessionSerializeHandler($Parameter);

	Fork\Config\$Config\SessionConfig::SessionGCProbability($Parameter);

	Fork\Config\$Config\SessionConfig::SessionGCDivisor($Parameter);

	Fork\Config\$Config\SessionConfig::SessionGCMaxlifetime($Parameter);

	Fork\Config\$Config\SessionConfig::SessionRefererCheck($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCacheLimiter($Parameter);

	Fork\Config\$Config\SessionConfig::SessionCacheExpire($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUseTransSid($Parameter);

	Fork\Config\$Config\SessionConfig::SessionSidLength($Parameter);

	Fork\Config\$Config\SessionConfig::SessionTransSidTags($Parameter);

	Fork\Config\$Config\SessionConfig::SessionTransSidHosts($Parameter);

	Fork\Config\$Config\SessionConfig::SessionSidBitsPerCharacter($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUploadProgressEnabled($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUploadProgressCleanup($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUploadProgressPrefix($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUploadProgressName($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUploadProgressFreq($Parameter);

	Fork\Config\$Config\SessionConfig::SessionUploadProgressMinFreq($Parameter);

	Fork\Config\$Config\SessionConfig::SessionLazyWrite($Parameter);
    }
}
