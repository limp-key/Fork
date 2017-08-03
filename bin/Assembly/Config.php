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

    public static function Defaults(){
	
/*	\Fork\Bin\Config\SkeletDefaultConfig::ArgSeparatorOutput('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::AutoDetectLineEndings('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::DefaultSocketTimeout('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::DisableClasses('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::DisableFunctions('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::ExposePHP('Off');
	
	\Fork\Bin\Config\SkeletDefaultConfig::ImplicitFlush('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::OpenBasedir('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::Precision('15');
	
	\Fork\Bin\Config\SkeletDefaultConfig::UrlRewriterHosts('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::UrlRewriterTags('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::UserAgent('');
	
	\Fork\Bin\Config\SkeletDefaultConfig::ZendEnableGC('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::ZendMultibyte('parameter');
	
	\Fork\Bin\Config\SkeletDefaultConfig::ZendScriptEncoding('parameter');

   # Other

   \Fork\Config\OtherConfig::ArgSeparatorInput(\Fork\Config\OtherConfig::$ArgSeparatorInput);

   \Fork\Config\OtherConfig::VariablesOrder(\Fork\Config\OtherConfig::$VariablesOrder);

   \Fork\Config\OtherConfig::RequestOrder(\Fork\Config\OtherConfig::$RequestOrder);

   \Fork\Config\OtherConfig::RegisterArgcArgv(\Fork\Config\OtherConfig::$RegisterArgcArgv);

   \Fork\Config\OtherConfig::AutoGlobalsJit(\Fork\Config\OtherConfig::$AutoGlobalsJit);

   \Fork\Config\OtherConfig::OutputBuffering(\Fork\Config\OtherConfig::$OutputBuffering);

   #\Fork\Config\OtherConfig::OutputHandler(\Fork\Config\OtherConfig::$OutputHandler);

   \Fork\Config\OtherConfig::UnserializeCallbackFunc(\Fork\Config\OtherConfig::$UnserializeCallbackFunc);

   \Fork\Config\OtherConfig::SerializePrecision(\Fork\Config\OtherConfig::$SerializePrecision);

   \Fork\Config\OtherConfig::RealPathCacheSize(\Fork\Config\OtherConfig::$RealPathCacheSize);

   \Fork\Config\OtherConfig::RealPathCacheTTL(\Fork\Config\OtherConfig::$RealPathCacheTTL);

 */
    }

    public static function Mains(){

	# System

	#\Fork\Config\SystemConfig::IgnoreUserAbort(\Fork\Config\SystemConfig::$IgnoreUserAbort);

	\Fork\Config\SystemConfig::MaxExecutionTime(\Fork\Config\SystemConfig::$MaxExecutionTime);

	\Fork\Config\SystemConfig::MaxInputTime(\Fork\Config\SystemConfig::$MaxInputTime);

	\Fork\Config\SystemConfig::MaxInputNestingLevel(\Fork\Config\SystemConfig::$MaxInputNestingLevel);
 
	\Fork\Config\SystemConfig::MaxInputVars(\Fork\Config\SystemConfig::$MaxInputVars);

	\Fork\Config\SystemConfig::MemoryLimit(\Fork\Config\SystemConfig::$MemoryLimit);

	#\Fork\Config\SystemConfig::IgnoreRepeatedSource(\Fork\Config\SystemConfig::$IgnoreRepeatedSource);

	#\Fork\Config\SystemConfig::ReportMemleaks(\Fork\Config\SystemConfig::$ReportMemleaks);

	#\Fork\Config\SystemConfig::ReportZendDebug(\Fork\Config\SystemConfig::$ReportZendDebug);

	\Fork\Config\SystemConfig::EnablePostDataReading(\Fork\Config\SystemConfig::$EnablePostDataReading);

	\Fork\Config\SystemConfig::PostMaxSize(\Fork\Config\SystemConfig::$PostMaxSize);

	\Fork\Config\SystemConfig::DefaultMimetype(\Fork\Config\SystemConfig::$DefaultMimetype);

	\Fork\Config\SystemConfig::DefaultCharset(\Fork\Config\SystemConfig::$DefaultCharset);

	\Fork\Config\SystemConfig::InternalEncoding(\Fork\Config\SystemConfig::$InternalEncoding);

	\Fork\Config\SystemConfig::InputEncoding(\Fork\Config\SystemConfig::$InputEncoding);

	\Fork\Config\SystemConfig::OutputEncoding(\Fork\Config\SystemConfig::$OutputEncoding);

	#\Fork\Config\SystemConfig::ExtensionDir(\Fork\Config\SystemConfig::$ExtensionDir);

	#\Fork\Config\SystemConfig::SysTempDir(\Fork\Config\SystemConfig::$SysTempDir);

	# Zlib

	\Fork\Config\ZlibConfig::ZlibOutputCompression(\Fork\Config\ZlibConfig::$ZlibOutputCompression);

	\Fork\Config\ZlibConfig::ZlibOutputCompressionLevel(\Fork\Config\ZlibConfig::$ZlibOutputCompressionLevel);

	\Fork\Config\ZlibConfig::ZlibOutputHandler(\Fork\Config\ZlibConfig::$ZlibOutputHandler);
	
	# Error

	\Fork\Config\ErrorConfig::HtmlErrors(\Fork\Config\ErrorConfig::$HtmlErrors);

	\Fork\Config\ErrorConfig::ErrorPrependString(\Fork\Config\ErrorConfig::$ErrorPrependString);

	\Fork\Config\ErrorConfig::ErrorAppendString(\Fork\Config\ErrorConfig::$ErrorAppendString);

	\Fork\Config\ErrorConfig::ErrorLog(\Fork\Config\ErrorConfig::$ErrorLog);

	\Fork\Config\ErrorConfig::ErrorReporting(\Fork\Config\ErrorConfig::$ErrorReporting);

	\Fork\Config\ErrorConfig::DisplayErrors(\Fork\Config\ErrorConfig::$DisplayErrors);

	\Fork\Config\ErrorConfig::DisplayStartupErrors(\Fork\Config\ErrorConfig::$DisplayStartupErrors);

	\Fork\Config\ErrorConfig::LogErrors(\Fork\Config\ErrorConfig::$LogErrors);

	\Fork\Config\ErrorConfig::LogErrorsMaxLen(\Fork\Config\ErrorConfig::$LogErrorsMaxLen);

	\Fork\Config\ErrorConfig::IgnoreRepeatedErrors(\Fork\Config\ErrorConfig::$IgnoreRepeatedErrors);
	
	\Fork\Config\ErrorConfig::XMLrpcErrors(\Fork\Config\ErrorConfig::$XMLrpcErrors);

	\Fork\Config\ErrorConfig::XMLrpcErrorNumber(\Fork\Config\ErrorConfig::$XMLrpcErrorNumber);

	\Fork\Config\ErrorConfig::TrackErrors(\Fork\Config\ErrorConfig::$TrackErrors);

	# Cgi

	\Fork\Config\CgiConfig::CgiForceRedirect(\Fork\Config\CgiConfig::$CgiForceRedirect);

	\Fork\Config\CgiConfig::CgiNPH(\Fork\Config\CgiConfig::$CgiNph);

	\Fork\Config\CgiConfig::CgiRedirectStatusEnv(\Fork\Config\CgiConfig::$CgiRedirectStatusEnv);

	\Fork\Config\CgiConfig::CgiFixPathinfo(\Fork\Config\CgiConfig::$CgiFixPathinfo);

	\Fork\Config\CgiConfig::CgiDiscardPath(\Fork\Config\CgiConfig::$CgiDiscardPath);

	\Fork\Config\CgiConfig::FastcgiImpersonate(\Fork\Config\CgiConfig::$FastcgiImpersonate);

	\Fork\Config\CgiConfig::FastcgiLogging(\Fork\Config\CgiConfig::$FastcgiLogging);

	\Fork\Config\CgiConfig::CgiRfc2616Headers(\Fork\Config\CgiConfig::$CgiRfc2616Headers);

	\Fork\Config\CgiConfig::CgiCheckShebangLine(\Fork\Config\CgiConfig::$CgiCheckShebangLine);

	# File
	
	\Fork\Config\FileConfig::FileUploads(\Fork\Config\FileConfig::$FileUploads);

	\Fork\Config\FileConfig::UploadTmpDir(\Fork\Config\FileConfig::$UploadTmpDir);

	\Fork\Config\FileConfig::UploadMaxFilesize(\Fork\Config\FileConfig::$UploadMaxFilesize);

	\Fork\Config\FileConfig::MaxFileUploads(\Fork\Config\FileConfig::$MaxFileUploads);

	\Fork\Config\FileConfig::AutoPrependFile(\Fork\Config\FileConfig::$AutoPrependFile);

	\Fork\Config\FileConfig::AutoAppendFile(\Fork\Config\FileConfig::$AutoAppendFile);
	
	# Date

	\Fork\Config\DateConfig::DateTimezone(\Fork\Config\DateConfig::$DateTimezone);

	\Fork\Config\DateConfig::DateDefaultLatitude(\Fork\Config\DateConfig::$DateDefaultLatitude);

	\Fork\Config\DateConfig::DateDefaultLongitude(\Fork\Config\DateConfig::$DateDefaultLongitude);

	\Fork\Config\DateConfig::DateSunriseZenith(\Fork\Config\DateConfig::$DateSunriseZenith);

	\Fork\Config\DateConfig::DateSunsetZenith(\Fork\Config\DateConfig::$DateSunsetZenith);

	# PCRE

	\Fork\Config\PCREConfig::PcreBacktrackLimit(\Fork\Config\PCREConfig::$PcreBacktrackLimit);

	\Fork\Config\PCREConfig::PcreRecursionLimit(\Fork\Config\PCREConfig::$PcreRecursionLimit);

	\Fork\Config\PCREConfig::PcreJit(\Fork\Config\PCREConfig::$PcreJit);

	# Session

	\Fork\Config\SessionConfig::SessionSaveHandler(\Fork\Config\SessionConfig::$SessionSaveHandler);

	\Fork\Config\SessionConfig::SessionSavePath(\Fork\Config\SessionConfig::$SessionSavePath);

	\Fork\Config\SessionConfig::SessionUseStrictMode(\Fork\Config\SessionConfig::$SessionUseStrictMode);

	\Fork\Config\SessionConfig::SessionUseCookies(\Fork\Config\SessionConfig::$SessionUseCookies);

	\Fork\Config\SessionConfig::SessionCookieSecure(\Fork\Config\SessionConfig::$SessionCookieSecure);

	\Fork\Config\SessionConfig::SessionUseOnlyCookies(\Fork\Config\SessionConfig::$SessionUseOnlyCookies);

	\Fork\Config\SessionConfig::SessionName(\Fork\Config\SessionConfig::$SessionName);

	\Fork\Config\SessionConfig::SessionAutoStart(\Fork\Config\SessionConfig::$SessionAutoStart);

	\Fork\Config\SessionConfig::SessionCookieLifetime(\Fork\Config\SessionConfig::$SessionCookieLifetime);

	\Fork\Config\SessionConfig::SessionCookiePath(\Fork\Config\SessionConfig::$SessionCookiePath);

	\Fork\Config\SessionConfig::SessionCookieDomain(\Fork\Config\SessionConfig::$SessionCookieDomain);

	\Fork\Config\SessionConfig::SessionCookieHttponly(\Fork\Config\SessionConfig::$SessionCookieHttponly);

	\Fork\Config\SessionConfig::SessionSerializeHandler(\Fork\Config\SessionConfig::$SessionSerializeHandler);

	\Fork\Config\SessionConfig::SessionGCProbability(\Fork\Config\SessionConfig::$SessionGCProbability);

	\Fork\Config\SessionConfig::SessionGCDivisor(\Fork\Config\SessionConfig::$SessionGCDivisor);

	\Fork\Config\SessionConfig::SessionGCMaxlifetime(\Fork\Config\SessionConfig::$SessionGCMaxlifetime);

	\Fork\Config\SessionConfig::SessionRefererCheck(\Fork\Config\SessionConfig::$SessionRefererCheck);

	\Fork\Config\SessionConfig::SessionCacheLimiter(\Fork\Config\SessionConfig::$SessionCacheLimiter);

	\Fork\Config\SessionConfig::SessionCacheExpire(\Fork\Config\SessionConfig::$SessionCacheExpire);

	\Fork\Config\SessionConfig::SessionUseTransSid(\Fork\Config\SessionConfig::$SessionUseTransSid);

	\Fork\Config\SessionConfig::SessionSidLength(\Fork\Config\SessionConfig::$SessionSidLength);

	\Fork\Config\SessionConfig::SessionTransSidTags(\Fork\Config\SessionConfig::$SessionTransSidTags);

	\Fork\Config\SessionConfig::SessionTransSidHosts(\Fork\Config\SessionConfig::$SessionTransSidHosts);

	\Fork\Config\SessionConfig::SessionSidBitsPerCharacter(\Fork\Config\SessionConfig::$SessionSidBitsPerCharacter);

	\Fork\Config\SessionConfig::SessionUploadProgressEnabled(\Fork\Config\SessionConfig::$SessionUploadProgressEnabled);

	\Fork\Config\SessionConfig::SessionUploadProgressCleanup(\Fork\Config\SessionConfig::$SessionUploadProgressCleanup);

	\Fork\Config\SessionConfig::SessionUploadProgressPrefix(\Fork\Config\SessionConfig::$SessionUploadProgressPrefix);

	\Fork\Config\SessionConfig::SessionUploadProgressName(\Fork\Config\SessionConfig::$SessionUploadProgressName);

	\Fork\Config\SessionConfig::SessionUploadProgressFreq(\Fork\Config\SessionConfig::$SessionUploadProgressFreq);

	\Fork\Config\SessionConfig::SessionUploadProgressMinFreq(\Fork\Config\SessionConfig::$SessionUploadProgressMinFreq);

	\Fork\Config\SessionConfig::SessionLazyWrite(\Fork\Config\SessionConfig::$SessionLazyWrite);

    }
    
    public static function Additionals($Config = 'Fork'){
/*
	# Other

	\Fork\Config\$Config\OtherConfig::ArgSeparatorInput(\Fork\Config\$Config\OtherConfig::$ArgSeparatorInput);

	\Fork\Config\$Config\OtherConfig::VariablesOrder(\Fork\Config\$Config\OtherConfig::$VariablesOrder);

	\Fork\Config\$Config\OrherConfig::RequestOrder(\Fork\Config\$Config\OtherConfig::$RequestOrder);

	\Fork\Config\$Config\OtherConfig::RegisterArgcArgv(\Fork\Config\$Config\OtherConfig::$RegisterArgcArgv);

	\Fork\Config\$Config\OtherConfig::AutoGlobalsJit(\Fork\Config\$Config\OtherConfig::$AutoGlobalsJit);

	\Fork\Config\$Config\OtherConfig::OutputBuffering(\Fork\Config\$Config\OtherConfig::$OutputBuffering);

	\Fork\Config\$Config\OtherConfig::OutputHandler(\Fork\Config\$Config\OtherConfig::$OutputHandler);

	\Fork\Config\$Config\OtherConfig::UnserializeCallbackFunc(\Fork\Config\$Config\OtherConfig::$UnserializeCallbackFunc);

	\Fork\Config\$Config\OtherConfig::SerializePrecision(\Fork\Config\$Config\OtherConfig::$SerializePrecision);

	\Fork\Config\$Config\OtherConfig::RealPathCacheSize(\Fork\Config\$Config\OtherConfig::$RealPathCacheSize);

	\Fork\Config\$Config\OtherConfig::RealPathCacheTTL(\Fork\Config\$Config\OtherConfig::$RealPathCacheTTL);

	# System

	\Fork\Config\$Config\SystemConfig::IgnoreUserAbort(\Fork\Config\$Config\SystemConfig::$IgnoreUserAbort);

	\Fork\Config\$Config\SystemConfig::MaxExecutionTime(\Fork\Config\$Config\SystemConfig::$MaxExecutionTime);

	\Fork\Config\$Config\SystemConfig::MaxInputTime(\Fork\Config\$Config\SystemConfig::$MaxInputTime);

	\Fork\Config\$Config\SystemConfig::MaxInputNestingLevel(\Fork\Config\$Config\SystemConfig::$MaxInputNestingLevel);
	
	\Fork\Config\$Config\SystemConfig::MaxInputVars(\Fork\Config\$Config\SystemConfig::$MaxInputVars);

	\Fork\Config\$Config\SystemConfig::MemoryLimit(\Fork\Config\$Config\SystemConfig::$MemoryLimit);

	\Fork\Config\$Config\SystemConfig::IgnoreRepeatedSource(\Fork\Config\$Config\SystemConfig::$IgnoreRepeatedSource);

	\Fork\Config\$Config\SystemConfig::ReportMemleaks(\Fork\Config\$Config\SystemConfig::$ReportMemleaks);

	\Fork\Config\$Config\SystemConfig::ReportZendDebug(\Fork\Config\$Config\SystemConfig::$ReportZendDebug);

	\Fork\Config\$Config\SystemConfig::EnablePostDataReading(\Fork\Config\$Config\SystemConfig::$EnablePostDataReading);

	\Fork\Config\$Config\SystemConfig::PostMaxSize(\Fork\Config\$Config\SystemConfig::$PostMaxSize);

	\Fork\Config\$Config\SystemConfig::DefaultMimetype(\Fork\Config\$Config\SystemConfig::$DefaultMimetype);

	\Fork\Config\$Config\SystemConfig::DefaultCharset(\Fork\Config\$Config\SystemConfig::$DefaultCharset);

	\Fork\Config\$Config\SystemConfig::InternalEncoding(\Fork\Config\$Config\SystemConfig::$InternalEncoding);

	\Fork\Config\$Config\SystemConfig::InputEncoding(\Fork\Config\$Config\SystemConfig::$InputEncoding);

	\Fork\Config\$Config\SystemConfig::OutputEncoding(\Fork\Config\$Config\SystemConfig::$OutputEncoding);

	\Fork\Config\$Config\SystemConfig::ExtensionDir(\Fork\Config\$Config\SystemConfig::$ExtensionDir);

	\Fork\Config\$Config\SystemConfig::SysTempDir(\Fork\Config\$Config\SystemConfig::$SysTempDir);

	# Zlib

	\Fork\Config\$Config\ZlibConfig::ZlibOutputCompression(\Fork\Config\$Config\ZlibConfig::$ZlibOutputCompression);

	\Fork\Config\$Config\ZlibConfig::ZlibOutputCompressionLevel(\Fork\Config\$Config\ZlibConfig::$ZlibOutputCompressionLevel);

	\Fork\Config\$Config\ZlibConfig::ZlibOutputHandler(\Fork\Config\$Config\ZlibConfig::$ZlibOutputHandler);
	
	# Error

	\Fork\Config\$Config\ErrorConfig::HtmlErrors(\Fork\Config\$Config\ErrorConfig::$HtmlErrors);

	\Fork\Config\$Config\ErrorConfig::ErrorPrependString(\Fork\Config\$Config\ErrorConfig::$ErrorPrependString);

	\Fork\Config\$Config\ErrorConfig::ErrorAppendString(\Fork\Config\$Config\ErrorConfig::$ErrorAppendString);

	\Fork\Config\$Config\ErrorConfig::ErrorLog(\Fork\Config\$Config\ErrorConfig::$ErrorLog);

	\Fork\Config\$Config\ErrorConfig::ErrorReporting(\Fork\Config\$Config\ErrorConfig::$ErrorReporting);

	\Fork\Config\$Config\ErrorConfig::DisplayErrors(\Fork\Config\$Config\ErrorConfig::$DisplayErrors);

	\Fork\Config\$Config\ErrorConfig::DisplayStartupErrors(\Fork\Config\$Config\ErrorConfig::$DisplayStartupErrors);

	\Fork\Config\$Config\ErrorConfig::LogErrors(\Fork\Config\$Config\ErrorConfig::$LogErrors);

	\Fork\Config\$Config\ErrorConfig::LogErrorsMaxLen(\Fork\Config\$Config\ErrorConfig::$LogErrorsMaxLen);

	\Fork\Config\$Config\ErrorConfig::IgnoreRepeatedErrors(\Fork\Config\$Config\ErrorConfig::$IgnoreRepeatedErrors);
	
	\Fork\Config\$Config\SystemConfig::XMLrpcErrors(\Fork\Config\$Config\ErrorConfig::$XMLrpcErrors);

	\Fork\Config\$Config\SystemConfig::XMLrpcErrorNumber(\Fork\Config\$Config\ErrorConfig::$XMLrpcErrorNumber);

	\Fork\Config\$Config\SystemConfig::TrackErrors(\Fork\Config\$Config\ErrorConfig::$TrackErrors);
	
	# Cgi

	\Fork\Config\$Config\CgiConfig::CgiForceRedirect(\Fork\Config\$Config\CgiConfig::$CgiForceRedirect);

	\Fork\Config\$Config\CgiConfig::CgiNPH(\Fork\Config\$Config\CgiConfig::$CgiNPH);

	\Fork\Config\$Config\CgiConfig::CgiRedirectStatusEnv(\Fork\Config\$Config\CgiConfig::$CgiRedirectStatusEnv);

	\Fork\Config\$Config\CgiConfig::CgiFixPathinfo(\Fork\Config\$Config\CgiConfig::$CgiFixPathinfo);

	\Fork\Config\$Config\CgiConfig::CgiDiscardPath(\Fork\Config\$Config\CgiConfig::$CgiDiscardPath);

	\Fork\Config\$Config\CgiConfig::FastcgiImpersonate(\Fork\Config\$Config\CgiConfig::$FastcgiImpersonate);

	\Fork\Config\$Config\CgiConfig::FastcgiLogging(\Fork\Config\$Config\CgiConfig::$FastcgiLogging);

	\Fork\Config\$Config\CgiConfig::Cgirfc2616Headers(\Fork\Config\$Config\CgiConfig::$Cgirfc2616Headers);

	\Fork\Config\$Config\CgiConfig::CgiCheckShebangLine(\Fork\Config\$Config\CgiConfig::$CgiCheckShebangLine);

	# File
	
	\Fork\Config\$Config\FileConfig::FileUploads(\Fork\Config\$Config\FileConfig::$FileUploads);

	\Fork\Config\$Config\FileConfig::UploadTmpDir(\Fork\Config\$Config\FileConfig::$UploadTmpDir);

	\Fork\Config\$Config\FileConfig::UploadMaxFilesize(\Fork\Config\$Config\FileConfig::$UploadMaxFilesize);

	\Fork\Config\$Config\FileConfig::MaxFileUploads(\Fork\Config\$Config\FileConfig::$MaxFileUploads);

	\Fork\Config\$Config\FileConfig::AllowURLFopen(\Fork\Config\$Config\FileConfig::$AllowURLFopen);

	\Fork\Config\$Config\FileConfig::AllowURLInclude(\Fork\Config\$Config\FileConfig::$AllowURLInclude);

	\Fork\Config\$Config\FileConfig::AutoPrependFile(\Fork\Config\$Config\FileConfig::$AutoPrependFile);

	\Fork\Config\$Config\FileConfig::AutoAppendFile(\Fork\Config\$Config\FileConfig::$AutoAppendFile);
	
	# Date

	\Fork\Config\$Config\DateConfig::DateTimezone(\Fork\Config\$Config\DateConfig::$DateTimezone);

	\Fork\Config\$Config\DateConfig::DateDefaultLatitude(\Fork\Config\$Config\DateConfig::$DateDefaultLatitude);

	\Fork\Config\$Config\DateConfig::DateDefaultLongitude(\Fork\Config\$Config\DateConfig::$DateDefaultLongitude);

	\Fork\Config\$Config\DateConfig::DateSunriseZenith(\Fork\Config\$Config\DateConfig::$DateSunriseZenith);

	\Fork\Config\$Config\DateConfig::DateSunsetZenith(\Fork\Config\$Config\DateConfig::$DateSunsetZenith);

	# PCRE

	\Fork\Config\$Config\PCREConfig::PcreBacktrackLimit(\Fork\Config\$Config\PCREConfig::$PcreBacktrackLimit);

	\Fork\Config\$Config\PCREConfig::PcreRecursionLimit(\Fork\Config\$Config\PCREConfig::$PcreRecursionLimit);

	\Fork\Config\$Config\PCREConfig::PcreJit(\Fork\Config\$Config\PCREConfig::$PcreJit);

	# Session

	\Fork\Config\$Config\SessionConfig::SessionSaveHandler(\Fork\Config\$Config\SessionConfig::$SessionSaveHandler);

	\Fork\Config\$Config\SessionConfig::SessionSavePath(\Fork\Config\$Config\SessionConfig::$SessionSavePath);

	\Fork\Config\$Config\SessionConfig::SessionUseStrictMode(\Fork\Config\$Config\SessionConfig::$SessionUseStrictMode);

	\Fork\Config\$Config\SessionConfig::SessionUseCookies(\Fork\Config\$Config\SessionConfig::$SessionUseCookies);

	\Fork\Config\$Config\SessionConfig::SessionCookieSecure(\Fork\Config\$Config\SessionConfig::$SessionCookieSecure);

	\Fork\Config\$Config\SessionConfig::SessionUseOnlyCookies(\Fork\Config\$Config\SessionConfig::$SessionUseOnlyCookies);

	\Fork\Config\$Config\SessionConfig::SessionName(\Fork\Config\$Config\SessionConfig::$SessionName);

	\Fork\Config\$Config\SessionConfig::SessionAutoStart(\Fork\Config\$Config\SessionConfig::$SessionAutoStart);

	\Fork\Config\$Config\SessionConfig::SessionCookieLifetime(\Fork\Config\$Config\SessionConfig::$SessionCookieLifetime);

	\Fork\Config\$Config\SessionConfig::SessionCookiePath(\Fork\Config\$Config\SessionConfig::$SessionCookiePath);

	\Fork\Config\$Config\SessionConfig::SessionCookieDomain(\Fork\Config\$Config\SessionConfig::$SessionCookieDomain);

	\Fork\Config\$Config\SessionConfig::SessionCookieHttponly(\Fork\Config\$Config\SessionConfig::$SessionCookieHttponly);

	\Fork\Config\$Config\SessionConfig::SessionSerializeHandler(\Fork\Config\$Config\SessionConfig::$SessionSerializeHandler);

	\Fork\Config\$Config\SessionConfig::SessionGCProbability(\Fork\Config\$Config\SessionConfig::$SessionGCProbability);

	\Fork\Config\$Config\SessionConfig::SessionGCDivisor(\Fork\Config\$Config\SessionConfig::$SessionGCDivisor);

	\Fork\Config\$Config\SessionConfig::SessionGCMaxlifetime(\Fork\Config\$Config\SessionConfig::$SessionGCMaxlifetime);

	\Fork\Config\$Config\SessionConfig::SessionRefererCheck(\Fork\Config\$Config\SessionConfig::$SessionRefererCheck);

	\Fork\Config\$Config\SessionConfig::SessionCacheLimiter(\Fork\Config\$Config\SessionConfig::$SessionCacheLimiter);

	\Fork\Config\$Config\SessionConfig::SessionCacheExpire(\Fork\Config\$Config\SessionConfig::$SessionCacheExpire);

	\Fork\Config\$Config\SessionConfig::SessionUseTransSid(\Fork\Config\$Config\SessionConfig::$SessionUseTransSid);

	\Fork\Config\$Config\SessionConfig::SessionSidLength(\Fork\Config\$Config\SessionConfig::$SessionSidLength);

	\Fork\Config\$Config\SessionConfig::SessionTransSidTags(\Fork\Config\$Config\SessionConfig::$SessionTransSidTags);

	\Fork\Config\$Config\SessionConfig::SessionTransSidHosts(\Fork\Config\$Config\SessionConfig::$SessionTransSidHosts);

	\Fork\Config\$Config\SessionConfig::SessionSidBitsPerCharacter(\Fork\Config\$Config\SessionConfig::$SessionSidBitsPerCharacter);

	\Fork\Config\$Config\SessionConfig::SessionUploadProgressEnabled(\Fork\Config\$Config\SessionConfig::$SessionUploadProgressEnabled);

	\Fork\Config\$Config\SessionConfig::SessionUploadProgressCleanup(\Fork\Config\$Config\SessionConfig::$SessionUploadProgressCleanup);

	\Fork\Config\$Config\SessionConfig::SessionUploadProgressPrefix(\Fork\Config\$Config\SessionConfig::$SessionUploadProgressPrefix);

	\Fork\Config\$Config\SessionConfig::SessionUploadProgressName(\Fork\Config\$Config\SessionConfig::$SessionUploadProgressName);

	\Fork\Config\$Config\SessionConfig::SessionUploadProgressFreq(\Fork\Config\$Config\SessionConfig::$SessionUploadProgressFreq);

	\Fork\Config\$Config\SessionConfig::SessionUploadProgressMinFreq(\Fork\Config\$Config\SessionConfig::$SessionUploadProgressMinFreq);

	\Fork\Config\$Config\SessionConfig::SessionLazyWrite(\Fork\Config\$Config\SessionConfig::$SessionLazyWrite);
*/	
    }
}
