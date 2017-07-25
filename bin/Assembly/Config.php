<?php

namespace Fork\Bin\Assembly;

class Config{

    public static function Start($AdditionalConfig){

	$SearchingParameters = sprintf('find ../config/ -maxdepth 1 | grep ".config.php"');
	
	exec($SearchingParameters,$Config);

	if(is_array($Config)){
	    foreach($Config as $IncludeConfig){
		require_once $IncludeConfig;
	    }
	}
	
	if($AdditionalConfig){
	    $SearchingParameters = sprintf('find ../config/%s | grep ".config.php"',$AdditionalConfig);

	    exec($SearchingParameters,$Config);

	    if(is_array($Config)){
		foreach($Config as $IncludeConfig){
		    require_once $IncludeConfig;
		}
	    }
	}		
    }

    public static function Default(){
	
	\Fork\Bin\Config\DefaultConfig::Precision(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::UrlRewriterTags(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::UrlRewriterHosts(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::ZendEnableGC(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::ZendMultibyte(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::ZendScriptEncoding(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::OpenBasedir(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::DisableFunctions(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::DisableClasses(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::UserAgent(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::DefaultSocketTimeout(\Fork\Bin\Config\DefaultConfig::$Parameter);

	\Fork\Bin\Config\DefaultConfig::AutoDetectLineEndings(\Fork\Bin\Config\DefaultConfig::$Parameter);

    }

    public static function Main(){

	# Other
	
	\Fork\Config\OtherConfig::ArgSeparatorOutput(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::ArgSeparatorInput(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::VariablesOrder(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OrherConfig::RequestOrder(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::RegisterArgcArgv(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::AutoGlobalsJit(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::OutputBuffering(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::OutputHandler(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::ImplicitFlush(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::UnserializeCallbackFunc(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::SerializePrecision(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::RealPathCacheSize(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::RealPathCacheTTL(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::ExposePHP(\Fork\Config\OtherConfig::$Parameter);

	# System

	\Fork\Config\SystemConfig::IgnoreUserAbort(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MaxExecutionTime(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MaxInputTime(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MaxInputNestingLevel(\Fork\Config\SystemConfig::$Parameter);
 
	\Fork\Config\SystemConfig::MaxInputVars(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MemoryLimit(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::IgnoreRepeatedSource(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::ReportMemleaks(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::ReportZendDebug(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::EnablePostDataReading(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::PostMaxSize(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::DefaultMimetype(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::DefaultCharset(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::InternalEncoding(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::InputEncoding(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::OutputEncoding(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::ExtensionDir(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::SysTempDir(\Fork\Config\SystemConfig::$Parameter);

	# Zlib

	\Fork\Config\ZlibConfig::ZlibOutputCompression(\Fork\Config\ZlibConfig::$Parameter);

	\Fork\Config\ZlibConfig::ZlibOutputCompressionLevel(\Fork\Config\ZlibConfig::$Parameter);

	\Fork\Config\ZlibConfig::ZlibOutputHandler(\Fork\Config\ZlibConfig::$Parameter);
	
	# Error

	\Fork\Config\ErrorConfig::HtmlErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorPrependString(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorAppendString(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorLog(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorReporting(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::DisplayErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::DisplayStartupErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::LogErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::LogErrorsMaxLen(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::IgnoreRepeatedErrors(\Fork\Config\ErrorConfig::$Parameter);
	
	\Fork\Config\SystemConfig::XMLrpcErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\SystemConfig::XMLrpcErrorNumber(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\SystemConfig::TrackErrors(\Fork\Config\ErrorConfig::$Parameter);
	
	# Cgi

	\Fork\Config\CgiConfig::CgiForceRedirect(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiNPH(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiRedirectStatusEnv(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiFixPathinfo(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiDiscardPath(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::FastcgiImpersonate(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::FastcgiLogging(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::Cgirfc2616Headers(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiCheckShebangLine(\Fork\Config\CgiConfig::$Parameter);

	# File
	
	\Fork\Config\FileConfig::FileUploads(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::UploadTmpDir(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::UploadMaxFilesize(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::MaxFileUploads(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AllowURLFopen(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AllowURLInclude(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AutoPrependFile(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AutoAppendFile(\Fork\Config\FileConfig::$Parameter);
	
	# Date

	\Fork\Config\DateConfig::DateTimezone(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateDefaultLatitude(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateDefaultLongitude(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateSunriseZenith(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateSunsetZenith(\Fork\Config\DateConfig::$Parameter);

	# PCRE

	\Fork\Config\PCREConfig::PcreBacktrackLimit(\Fork\Config\PCREConfig::$Parameter);

	\Fork\Config\PCREConfig::PcreRecursionLimit(\Fork\Config\PCREConfig::$Parameter);

	\Fork\Config\PCREConfig::PcreJit(\Fork\Config\PCREConfig::$Parameter);

	# Session

	\Fork\Config\SessionConfig::SessionSaveHandler(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSavePath(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseStrictMode(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseCookies(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieSecure(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseOnlyCookies(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionName(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionAutoStart(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieLifetime(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookiePath(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieDomain(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieHttponly(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSerializeHandler(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionGCProbability(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionGCDivisor(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionGCMaxlifetime(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionRefererCheck(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCacheLimiter(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCacheExpire(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseTransSid(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSidLength(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionTransSidTags(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionTransSidHosts(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSidBitsPerCharacter(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressEnabled(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressCleanup(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressPrefix(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressName(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressFreq(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressMinFreq(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionLazyWrite(\Fork\Config\SessionConfig::$Parameter);
	
    }
    
    public static function Additional($Config){

	# Other
	
	\Fork\Config\OtherConfig::ArgSeparatorOutput(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::ArgSeparatorInput(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::VariablesOrder(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OrherConfig::RequestOrder(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::RegisterArgcArgv(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::AutoGlobalsJit(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::OutputBuffering(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::OutputHandler(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::ImplicitFlush(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::UnserializeCallbackFunc(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::SerializePrecision(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::RealPathCacheSize(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::RealPathCacheTTL(\Fork\Config\OtherConfig::$Parameter);

	\Fork\Config\OtherConfig::ExposePHP(\Fork\Config\OtherConfig::$Parameter);

	# System

	\Fork\Config\SystemConfig::IgnoreUserAbort(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MaxExecutionTime(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MaxInputTime(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MaxInputNestingLevel(\Fork\Config\SystemConfig::$Parameter);
	
	\Fork\Config\SystemConfig::MaxInputVars(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::MemoryLimit(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::IgnoreRepeatedSource(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::ReportMemleaks(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::ReportZendDebug(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::EnablePostDataReading(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::PostMaxSize(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::DefaultMimetype(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::DefaultCharset(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::InternalEncoding(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::InputEncoding(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::OutputEncoding(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::ExtensionDir(\Fork\Config\SystemConfig::$Parameter);

	\Fork\Config\SystemConfig::SysTempDir(\Fork\Config\SystemConfig::$Parameter);

	# Zlib

	\Fork\Config\ZlibConfig::ZlibOutputCompression(\Fork\Config\ZlibConfig::$Parameter);

	\Fork\Config\ZlibConfig::ZlibOutputCompressionLevel(\Fork\Config\ZlibConfig::$Parameter);

	\Fork\Config\ZlibConfig::ZlibOutputHandler(\Fork\Config\ZlibConfig::$Parameter);
	
	# Error

	\Fork\Config\ErrorConfig::HtmlErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorPrependString(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorAppendString(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorLog(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::ErrorReporting(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::DisplayErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::DisplayStartupErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::LogErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::LogErrorsMaxLen(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\ErrorConfig::IgnoreRepeatedErrors(\Fork\Config\ErrorConfig::$Parameter);
	
	\Fork\Config\SystemConfig::XMLrpcErrors(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\SystemConfig::XMLrpcErrorNumber(\Fork\Config\ErrorConfig::$Parameter);

	\Fork\Config\SystemConfig::TrackErrors(\Fork\Config\ErrorConfig::$Parameter);
	
	# Cgi

	\Fork\Config\CgiConfig::CgiForceRedirect(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiNPH(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiRedirectStatusEnv(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiFixPathinfo(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiDiscardPath(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::FastcgiImpersonate(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::FastcgiLogging(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::Cgirfc2616Headers(\Fork\Config\CgiConfig::$Parameter);

	\Fork\Config\CgiConfig::CgiCheckShebangLine(\Fork\Config\CgiConfig::$Parameter);

	# File
	
	\Fork\Config\FileConfig::FileUploads(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::UploadTmpDir(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::UploadMaxFilesize(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::MaxFileUploads(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AllowURLFopen(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AllowURLInclude(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AutoPrependFile(\Fork\Config\FileConfig::$Parameter);

	\Fork\Config\FileConfig::AutoAppendFile(\Fork\Config\FileConfig::$Parameter);
	
	# Date

	\Fork\Config\DateConfig::DateTimezone(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateDefaultLatitude(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateDefaultLongitude(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateSunriseZenith(\Fork\Config\DateConfig::$Parameter);

	\Fork\Config\DateConfig::DateSunsetZenith(\Fork\Config\DateConfig::$Parameter);

	# PCRE

	\Fork\Config\PCREConfig::PcreBacktrackLimit(\Fork\Config\PCREConfig::$Parameter);

	\Fork\Config\PCREConfig::PcreRecursionLimit(\Fork\Config\PCREConfig::$Parameter);

	\Fork\Config\PCREConfig::PcreJit(\Fork\Config\PCREConfig::$Parameter);

	# Session

	\Fork\Config\SessionConfig::SessionSaveHandler(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSavePath(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseStrictMode(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseCookies(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieSecure(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseOnlyCookies(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionName(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionAutoStart(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieLifetime(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookiePath(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieDomain(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCookieHttponly(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSerializeHandler(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionGCProbability(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionGCDivisor(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionGCMaxlifetime(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionRefererCheck(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCacheLimiter(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionCacheExpire(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUseTransSid(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSidLength(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionTransSidTags(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionTransSidHosts(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionSidBitsPerCharacter(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressEnabled(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressCleanup(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressPrefix(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressName(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressFreq(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionUploadProgressMinFreq(\Fork\Config\SessionConfig::$Parameter);

	\Fork\Config\SessionConfig::SessionLazyWrite(\Fork\Config\SessionConfig::$Parameter);
    }
}
