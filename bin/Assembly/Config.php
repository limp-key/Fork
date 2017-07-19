<?php

namespace Fork\Bin\Assembly;

class Config{

    public static function Include($ConfigDIR){
	
	$SearchingParameters = 'find ../config/'.$ConfigDIR.' | grep ".Config.php"';

	exec($SearchingParameters,$Config);

	if(is_array($Config)){
	    foreach($Config as $IncludeConfig){
		require_once $IncludeConfig;
	    }
	}

	/*
	   Fork\Config\SystemConfig::Precision($Parameter);

	   Fork\Config\SystemConfig::OutputBuffering($Parameter);

	   Fork\Config\SystemConfig::OutputHandler($Parameter);

	   Fork\Config\SystemConfig::UrlRewriterTags($Parameter);

	   Fork\Config\SystemConfig::UrlRewriterHosts($Parameter);

	   Fork\Config\SystemConfig::ZlibOutputCompression($Parameter);

	   Fork\Config\SystemConfig::ZlibOutputCompressionLevel($Parameter);

	   Fork\Config\SystemConfig::ZlibOutputHandler($Parameter);

	   Fork\Config\SystemConfig::ImplicitFlush($Parameter);

	   Fork\Config\SystemConfig::UnserializeCallbackFunc($Parameter);

	   Fork\Config\SystemConfig::SerializePrecision($Parameter);

	   Fork\Config\SystemConfig::OpenBasedir($Parameter);

	   Fork\Config\SystemConfig::DisableFunctions($Parameter);

	   Fork\Config\SystemConfig::DisableClasses($Parameter);

	   Fork\Config\SystemConfig::IgnoreUserAbort($Parameter);

	   Fork\Config\SystemConfig::RealPathCacheSize($Parameter);

	   Fork\Config\SystemConfig::RealPathCacheTTL($Parameter);

	   Fork\Config\SystemConfig::ZendEnableGC($Parameter);

	   Fork\Config\SystemConfig::ZendMultibyte($Parameter);

	   Fork\Config\SystemConfig::ZendScriptEncoding($Parameter);

	   Fork\Config\SystemConfig::ExposePHP($Parameter);

	   Fork\Config\SystemConfig::MaxExecutionTime($Parameter);

	   Fork\Config\SystemConfig::MaxInputTime($Parameter);

	   Fork\Config\SystemConfig::MaxInputNestingLevel($Parameter);

	   Fork\Config\SystemConfig::MaxInputVars($Parameter);

	   Fork\Config\SystemConfig::MemoryLimit($Parameter);

	   Fork\Config\SystemConfig::ErrorReporting($Parameter);

	   Fork\Config\SystemConfig::DisplayErrors($Parameter);

	   Fork\Config\SystemConfig::DisplayStartupErrors($Parameter);

	   Fork\Config\SystemConfig::LogErrors($Parameter);

	   Fork\Config\SystemConfig::LogErrorsMaxLen($Parameter);

	   Fork\Config\SystemConfig::IgnoreRepeatedErrors($Parameter);

	   Fork\Config\SystemConfig::IgnoreRepeatedSource($Parameter);

	   Fork\Config\SystemConfig::ReportMemleaks($Parameter);

	   Fork\Config\SystemConfig::ReportZendDebug($Parameter);

	   Fork\Config\SystemConfig::TrackErrors($Parameter);

	   Fork\Config\SystemConfig::XMLrpcErrors($Parameter);

	   Fork\Config\SystemConfig::XMLrpcErrorNumber($Parameter);

	   Fork\Config\SystemConfig::HtmlErrors($Parameter);

	   Fork\Config\SystemConfig::ErrorPrependString($Parameter);

	   Fork\Config\SystemConfig::ErrorAppendString($Parameter);

	   Fork\Config\SystemConfig::ErrorLog($Parameter);

	   Fork\Config\SystemConfig::ArgSeparatorOutput($Parameter);

	   Fork\Config\SystemConfig::ArgSeparatorInput($Parameter);

	   Fork\Config\SystemConfig::VariablesOrder($Parameter);

	   Fork\Config\SystemConfig::RequestOrder($Parameter);

	   Fork\Config\SystemConfig::RegisterArgcArgv($Parameter);

	   Fork\Config\SystemConfig::AutoGlobalsJit($Parameter);

	   Fork\Config\SystemConfig::EnablePostDataReading($Parameter);

	   Fork\Config\SystemConfig::PostMaxSize($Parameter);

	   Fork\Config\SystemConfig::AutoPrependFile($Parameter);

	   Fork\Config\SystemConfig::AutoAppendFile($Parameter);

	   Fork\Config\SystemConfig::DefaultMimetype($Parameter);

	   Fork\Config\SystemConfig::DefaultCharset($Parameter);

	   Fork\Config\SystemConfig::InternalEncoding($Parameter);

	   Fork\Config\SystemConfig::InputEncoding($Parameter);

	   Fork\Config\SystemConfig::OutputEncoding($Parameter);

	   Fork\Config\SystemConfig::ExtensionDir($Parameter);

	   Fork\Config\SystemConfig::SysTempDir($Parameter);

	   Fork\Config\SystemConfig::CgiForceRedirect($Parameter);

	   Fork\Config\SystemConfig::CgiNPH($Parameter);

	   Fork\Config\SystemConfig::CgiRedirectStatusEnv($Parameter);

	   Fork\Config\SystemConfig::CgiFixPathinfo($Parameter);

	   Fork\Config\SystemConfig::CgiDiscardPath($Parameter);

	   Fork\Config\SystemConfig::FastcgiImpersonate($Parameter);

	   Fork\Config\SystemConfig::FastcgiLogging($Parameter);

	   Fork\Config\SystemConfig::Cgirfc2616Headers($Parameter);

	   Fork\Config\SystemConfig::CgiCheckShebangLine($Parameter);

	   Fork\Config\SystemConfig::FileUploads($Parameter);

	   Fork\Config\SystemConfig::UploadTmpDir($Parameter);

	   Fork\Config\SystemConfig::UploadMaxFilesize($Parameter);

	   Fork\Config\SystemConfig::MaxFileUploads($Parameter);

	   Fork\Config\SystemConfig::AllowURLFopen($Parameter);

	   Fork\Config\SystemConfig::AllowURLInclude($Parameter);

	   Fork\Config\SystemConfig::UserAgent($Parameter);

	   Fork\Config\SystemConfig::DefaultSocketTimeout($Parameter);

	   Fork\Config\SystemConfig::AutoDetectLineEndings($Parameter);

	   Fork\Config\SystemConfig::DateTimezone($Parameter);

	   Fork\Config\SystemConfig::DateDefaultLatitude($Parameter);

	   Fork\Config\SystemConfig::DateDefaultLongitude($Parameter);

	   Fork\Config\SystemConfig::DateSunriseZenith($Parameter);

	   Fork\Config\SystemConfig::DateSunsetZenith($Parameter);

	   Fork\Config\SystemConfig::PcreBacktrackLimit($Parameter);

	   Fork\Config\SystemConfig::PcreRecursionLimit($Parameter);

	   Fork\Config\SystemConfig::PcreJit($Parameter);

	   # Session

	   Fork\Config\SystemConfig::SessionSaveHandler($Parameter);

	   Fork\Config\SystemConfig::SessionSavePath($Parameter);

	   Fork\Config\SystemConfig::SessionUseStrictMode($Parameter);

	   Fork\Config\SystemConfig::SessionUseCookies($Parameter);

	   Fork\Config\SystemConfig::SessionCookieSecure($Parameter);

	   Fork\Config\SystemConfig::SessionUseOnlyCookies($Parameter);

	   Fork\Config\SystemConfig::SessionName($Parameter);

	   Fork\Config\SystemConfig::SessionAutoStart($Parameter);

	   Fork\Config\SystemConfig::SessionCookieLifetime($Parameter);

	   Fork\Config\SystemConfig::SessionCookiePath($Parameter);

	   Fork\Config\SystemConfig::SessionCookieDomain($Parameter);

	   Fork\Config\SystemConfig::SessionCookieHttponly($Parameter);

	   Fork\Config\SystemConfig::SessionSerializeHandler($Parameter);

	   Fork\Config\SystemConfig::SessionGCProbability($Parameter);

	   Fork\Config\SystemConfig::SessionGCDivisor($Parameter);

	   Fork\Config\SystemConfig::SessionGCMaxlifetime($Parameter);

	   Fork\Config\SystemConfig::SessionRefererCheck($Parameter);

	   Fork\Config\SystemConfig::SessionCacheLimiter($Parameter);

	   Fork\Config\SystemConfig::SessionCacheExpire($Parameter);

	   Fork\Config\SystemConfig::SessionUseTransSid($Parameter);

	   Fork\Config\SystemConfig::SessionSidLength($Parameter);

	   Fork\Config\SystemConfig::SessionTransSidTags($Parameter);

	   Fork\Config\SystemConfig::SessionTransSidHosts($Parameter);

	   Fork\Config\SystemConfig::SessionSidBitsPerCharacter($Parameter);

	   Fork\Config\SystemConfig::SessionUploadProgressEnabled($Parameter);

	   Fork\Config\SystemConfig::SessionUploadProgressCleanup($Parameter);

	   Fork\Config\SystemConfig::SessionUploadProgressPrefix($Parameter);

	   Fork\Config\SystemConfig::SessionUploadProgressName($Parameter);

	   Fork\Config\SystemConfig::SessionUploadProgressFreq($Parameter);

	   Fork\Config\SystemConfig::SessionUploadProgressMinFreq($Parameter);

	   Fork\Config\SystemConfig::SessionLazyWrite($Parameter);
	 */

    }
}
