<?php

namespace Fork\Assembly;

class Configs{

    public static function ToPlug($NameSpace){

	# Convert namespace to file path
	$File = str_replace('\\', '/', $NameSpace);

	$File = preg_replace('#^Configs#','configs',$File);
	
	# Add .php extension for file path
	$File = sprintf('../%s.php', $File);
	
	# Assay file exists 
	if(is_file($File)){

	    # Include file in folder {path/to/project}/configs/
	    $Include = require_once $File;
	}

	if(isset($Include)){
	    return true;
	}else{
	    return false;
	}
    }

    public static function Defaults(){
	
	\Fork\Config\SkeletDefaultConfig::ArgSeparatorOutput('parameter');
	
	\Fork\Config\SkeletDefaultConfig::AutoDetectLineEndings('parameter');
	
	\Fork\Config\SkeletDefaultConfig::DefaultSocketTimeout('parameter');
	
	\Fork\Config\SkeletDefaultConfig::DisableClasses('parameter');
	
	\Fork\Config\SkeletDefaultConfig::DisableFunctions('parameter');
	
	\Fork\Config\SkeletDefaultConfig::ExposePHP('Off');
	
	\Fork\Config\SkeletDefaultConfig::ImplicitFlush('parameter');
	
	\Fork\Config\SkeletDefaultConfig::OpenBasedir('parameter');
	
	\Fork\Config\SkeletDefaultConfig::Precision('15');
	
	\Fork\Config\SkeletDefaultConfig::UrlRewriterHosts('parameter');
	
	\Fork\Config\SkeletDefaultConfig::UrlRewriterTags('parameter');
	
	\Fork\Config\SkeletDefaultConfig::UserAgent('');
	
	\Fork\Config\SkeletDefaultConfig::ZendEnableGC('parameter');
	
	\Fork\Config\SkeletDefaultConfig::ZendMultibyte('parameter');
	
	\Fork\Config\SkeletDefaultConfig::ZendScriptEncoding('parameter');

	\Fork\Config\SkeletDefaultConfig::ArgSeparatorInput(\Fork\Config\SkeletDefaultConfig::$ArgSeparatorInput);

	\Fork\Config\SkeletDefaultConfig::VariablesOrder(\Fork\Config\SkeletDefaultConfig::$VariablesOrder);

	\Fork\Config\SkeletDefaultConfig::RequestOrder(\Fork\Config\SkeletDefaultConfig::$RequestOrder);

	\Fork\Config\SkeletDefaultConfig::RegisterArgcArgv(\Fork\Config\SkeletDefaultConfig::$RegisterArgcArgv);

	\Fork\Config\SkeletDefaultConfig::AutoGlobalsJit(\Fork\Config\SkeletDefaultConfig::$AutoGlobalsJit);

	\Fork\Config\SkeletDefaultConfig::OutputBuffering(\Fork\Config\SkeletDefaultConfig::$OutputBuffering);

	\Fork\Config\SkeletDefaultConfig::UnserializeCallbackFunc(\Fork\Config\SkeletDefaultConfig::$UnserializeCallbackFunc);

	\Fork\Config\SkeletDefaultConfig::SerializePrecision(\Fork\Config\SkeletDefaultConfig::$SerializePrecision);

	\Fork\Config\SkeletDefaultConfig::RealPathCacheSize(\Fork\Config\SkeletDefaultConfig::$RealPathCacheSize);

	\Fork\Config\SkeletDefaultConfig::RealPathCacheTTL(\Fork\Config\SkeletDefaultConfig::$RealPathCacheTTL);

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
    
    public static function Additionals($Config){

	# Assembly namespace

	$System = sprintf('\\Fork\\Config\\%s\\System',$Config);
	
	$Zlib = sprintf('\\Fork\\Config\\%s\\Zlib',$Config);
	
	$Error = sprintf('\\Fork\\Config\\%s\\Error',$Config);
	
	$Cgi = sprintf('\\Fork\\Config\\%s\\Cgi',$Config);
	
	$File = sprintf('\\Fork\\Config\\%s\\File',$Config);
	
	$PCRE = sprintf('\\Fork\\Config\\%s\\PCRE',$Config);

	$Date = sprintf('\\Fork\\Config\\%s\\Date',$Config);

	$Session = sprintf('\\Fork\\Config\\%s\\Session',$Config);
	
	# System
	
	#$System::IgnoreUserAbort($System::$IgnoreUserAbort);

	$System::MaxExecutionTime($System::$MaxExecutionTime);

	$System::MaxInputTime($System::$MaxInputTime);

	$System::MaxInputNestingLevel($System::$MaxInputNestingLevel);
	
	$System::MaxInputVars($System::$MaxInputVars);

	$System::MemoryLimit($System::$MemoryLimit);

	#$System::IgnoreRepeatedSource($System::$IgnoreRepeatedSource);

	#$System::ReportMemleaks($System::$ReportMemleaks);

	#$System::ReportZendDebug($System::$ReportZendDebug);

	$System::EnablePostDataReading($System::$EnablePostDataReading);

	$System::PostMaxSize($System::$PostMaxSize);

	$System::DefaultMimetype($System::$DefaultMimetype);

	$System::DefaultCharset($System::$DefaultCharset);

	$System::InternalEncoding($System::$InternalEncoding);

	$System::InputEncoding($System::$InputEncoding);

	$System::OutputEncoding($System::$OutputEncoding);

	#$System::ExtensionDir($System::$ExtensionDir);

	#$System::SysTempDir($System::$SysTempDir);

	# Zlib

	$Zlib::ZlibOutputCompression($Zlib::$ZlibOutputCompression);

	$Zlib::ZlibOutputCompressionLevel($Zlib::$ZlibOutputCompressionLevel);

	$Zlib::ZlibOutputHandler($Zlib::$ZlibOutputHandler);
	
	# Error
	
	$Error::HtmlErrors($Error::$HtmlErrors);

	$Error::ErrorPrependString($Error::$ErrorPrependString);

	$Error::ErrorAppendString($Error::$ErrorAppendString);

	$Error::ErrorLog($Error::$ErrorLog);

	$Error::ErrorReporting($Error::$ErrorReporting);

	$Error::DisplayErrors($Error::$DisplayErrors);

	$Error::DisplayStartupErrors($Error::$DisplayStartupErrors);

	$Error::LogErrors($Error::$LogErrors);

	$Error::LogErrorsMaxLen($Error::$LogErrorsMaxLen);

	$Error::IgnoreRepeatedErrors($Error::$IgnoreRepeatedErrors);
	
	$Error::XMLrpcErrors($Error::$XMLrpcErrors);

	$Error::XMLrpcErrorNumber($Error::$XMLrpcErrorNumber);

	$Error::TrackErrors($Error::$TrackErrors);

	# Cgi

	$Cgi::CgiForceRedirect($Cgi::$CgiForceRedirect);

	#$Cgi::CgiNPH($Cgi::$CgiNPH);

	$Cgi::CgiRedirectStatusEnv($Cgi::$CgiRedirectStatusEnv);

	$Cgi::CgiFixPathinfo($Cgi::$CgiFixPathinfo);

	$Cgi::CgiDiscardPath($Cgi::$CgiDiscardPath);

	$Cgi::FastcgiImpersonate($Cgi::$FastcgiImpersonate);

	$Cgi::FastcgiLogging($Cgi::$FastcgiLogging);

	#$Cgi::Cgirfc2616Headers($Cgi::$Cgirfc2616Headers);

	$Cgi::CgiCheckShebangLine($Cgi::$CgiCheckShebangLine);

	# File
	
	#$File::FileUploads($File::$FileUploads);

	#$File::UploadTmpDir($File::$UploadTmpDir);

	#$File::UploadMaxFilesize($File::$UploadMaxFilesize);

	#$File::MaxFileUploads($File::$MaxFileUploads);

	#$File::AllowURLFopen($File::$AllowURLFopen);

	#$File::AllowURLInclude($File::$AllowURLInclude);

	#$File::AutoPrependFile($File::$AutoPrependFile);

	#$File::AutoAppendFile($File::$AutoAppendFile);
	
	# Date

	$Date::DateTimezone($Date::$DateTimezone);

	$Date::DateDefaultLatitude($Date::$DateDefaultLatitude);

	$Date::DateDefaultLongitude($Date::$DateDefaultLongitude);

	$Date::DateSunriseZenith($Date::$DateSunriseZenith);

	$Date::DateSunsetZenith($Date::$DateSunsetZenith);

	# PCRE

	$PCRE::PcreBacktrackLimit($PCRE::$PcreBacktrackLimit);

	$PCRE::PcreRecursionLimit($PCRE::$PcreRecursionLimit);

	$PCRE::PcreJit($PCRE::$PcreJit);

	# Session

	$Session::SessionSaveHandler($Session::$SessionSaveHandler);

	$Session::SessionSavePath($Session::$SessionSavePath);

	$Session::SessionUseStrictMode($Session::$SessionUseStrictMode);

	$Session::SessionUseCookies($Session::$SessionUseCookies);

	$Session::SessionCookieSecure($Session::$SessionCookieSecure);

	$Session::SessionUseOnlyCookies($Session::$SessionUseOnlyCookies);

	$Session::SessionName($Session::$SessionName);

	$Session::SessionAutoStart($Session::$SessionAutoStart);

	$Session::SessionCookieLifetime($Session::$SessionCookieLifetime);

	$Session::SessionCookiePath($Session::$SessionCookiePath);

	$Session::SessionCookieDomain($Session::$SessionCookieDomain);

	$Session::SessionCookieHttponly($Session::$SessionCookieHttponly);

	$Session::SessionSerializeHandler($Session::$SessionSerializeHandler);

	$Session::SessionGCProbability($Session::$SessionGCProbability);

	$Session::SessionGCDivisor($Session::$SessionGCDivisor);

	$Session::SessionGCMaxlifetime($Session::$SessionGCMaxlifetime);

	$Session::SessionRefererCheck($Session::$SessionRefererCheck);

	$Session::SessionCacheLimiter($Session::$SessionCacheLimiter);

	$Session::SessionCacheExpire($Session::$SessionCacheExpire);

	$Session::SessionUseTransSid($Session::$SessionUseTransSid);

	$Session::SessionSidLength($Session::$SessionSidLength);

	$Session::SessionTransSidTags($Session::$SessionTransSidTags);

	$Session::SessionTransSidHosts($Session::$SessionTransSidHosts);

	$Session::SessionSidBitsPerCharacter($Session::$SessionSidBitsPerCharacter);

	$Session::SessionUploadProgressEnabled($Session::$SessionUploadProgressEnabled);

	$Session::SessionUploadProgressCleanup($Session::$SessionUploadProgressCleanup);

	$Session::SessionUploadProgressPrefix($Session::$SessionUploadProgressPrefix);

	$Session::SessionUploadProgressName($Session::$SessionUploadProgressName);

	$Session::SessionUploadProgressFreq($Session::$SessionUploadProgressFreq);

	$Session::SessionUploadProgressMinFreq($Session::$SessionUploadProgressMinFreq);

	$Session::SessionLazyWrite($Session::$SessionLazyWrite);
    }
}
