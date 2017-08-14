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

    public static function Defaults() {
	
	\Fork\Config\SkeletDefaultConfig::ExposePHP('Off');
	
	\Fork\Config\SkeletDefaultConfig::ImplicitFlush('parameter');
	
	#\Fork\Configs\SkeletDefaultConfigs::OpenBasedir('/var/www/limp-key/Fork/');
	
	\Fork\Config\SkeletDefaultConfig::Precision('15');
	
	#\Fork\Configs\SkeletDefaultConfigs::UrlRewriterHosts('parameter');
	
	#\Fork\Configs\SkeletDefaultConfigs::UrlRewriterTags('parameter');
	
	#\Fork\Configs\SkeletDefaultConfigs::UserAgent('');
	
	\Fork\Config\SkeletDefaultConfig::RequestOrder(\Fork\Config\SkeletDefaultConfig::$RequestOrder);

	\Fork\Config\SkeletDefaultConfig::RegisterArgcArgv(\Fork\Config\SkeletDefaultConfig::$RegisterArgcArgv);

	\Fork\Config\SkeletDefaultConfig::AutoGlobalsJit(\Fork\Config\SkeletDefaultConfig::$AutoGlobalsJit);

	\Fork\Config\SkeletDefaultConfig::OutputBuffering(\Fork\Config\SkeletDefaultConfig::$OutputBuffering);

	\Fork\Config\SkeletDefaultConfig::UnserializeCallbackFunc(\Fork\Config\SkeletDefaultConfig::$UnserializeCallbackFunc);

	\Fork\Config\SkeletDefaultConfig::SerializePrecision(\Fork\Config\SkeletDefaultConfig::$SerializePrecision);

	\Fork\Config\SkeletDefaultConfig::RealPathCacheSize(\Fork\Config\SkeletDefaultConfig::$RealPathCacheSize);

	\Fork\Config\SkeletDefaultConfig::RealPathCacheTTL(\Fork\Config\SkeletDefaultConfig::$RealPathCacheTTL);

    }

    public static function Configs(){

	# System

	\Configs\SystemConfig::DefaultMimetype(\Configs\SystemConfig::$DefaultMimetype);

	\Configs\SystemConfig::DefaultCharset(\Configs\SystemConfig::$DefaultCharset);

	# Zlib

	\Configs\ZlibConfig::ZlibOutputCompression(\Configs\ZlibConfig::$ZlibOutputCompression);

	\Configs\ZlibConfig::ZlibOutputCompressionLevel(\Configs\ZlibConfig::$ZlibOutputCompressionLevel);

	\Configs\ZlibConfig::ZlibOutputHandler(\Configs\ZlibConfig::$ZlibOutputHandler);
	
	# Error

	\Configs\ErrorConfig::HtmlErrors(\Configs\ErrorConfig::$HtmlErrors);

	\Configs\ErrorConfig::ErrorPrependString(\Configs\ErrorConfig::$ErrorPrependString);

	\Configs\ErrorConfig::ErrorAppendString(\Configs\ErrorConfig::$ErrorAppendString);

	\Configs\ErrorConfig::ErrorLog(\Configs\ErrorConfig::$ErrorLog);

	\Configs\ErrorConfig::ErrorReporting(\Configs\ErrorConfig::$ErrorReporting);

	\Configs\ErrorConfig::DisplayErrors(\Configs\ErrorConfig::$DisplayErrors);

	\Configs\ErrorConfig::DisplayStartupErrors(\Configs\ErrorConfig::$DisplayStartupErrors);

	\Configs\ErrorConfig::LogErrors(\Configs\ErrorConfig::$LogErrors);

	\Configs\ErrorConfig::LogErrorsMaxLen(\Configs\ErrorConfig::$LogErrorsMaxLen);

	\Configs\ErrorConfig::IgnoreRepeatedErrors(\Configs\ErrorConfig::$IgnoreRepeatedErrors);
	
	\Configs\ErrorConfig::XMLrpcErrors(\Configs\ErrorConfig::$XMLrpcErrors);

	\Configs\ErrorConfig::XMLrpcErrorNumber(\Configs\ErrorConfig::$XMLrpcErrorNumber);

	\Configs\ErrorConfig::TrackErrors(\Configs\ErrorConfig::$TrackErrors);
	
	# Date

	\Configs\DateConfig::DateTimezone(\Configs\DateConfig::$DateTimezone);

	\Configs\DateConfig::DateDefaultLatitude(\Configs\DateConfig::$DateDefaultLatitude);

	\Configs\DateConfig::DateDefaultLongitude(\Configs\DateConfig::$DateDefaultLongitude);

	\Configs\DateConfig::DateSunriseZenith(\Configs\DateConfig::$DateSunriseZenith);

	\Configs\DateConfig::DateSunsetZenith(\Configs\DateConfig::$DateSunsetZenith);

	# Session

	\Configs\SessionConfig::SessionSaveHandler(\Configs\SessionConfig::$SessionSaveHandler);

	\Configs\SessionConfig::SessionSavePath(\Configs\SessionConfig::$SessionSavePath);

	\Configs\SessionConfig::SessionUseStrictMode(\Configs\SessionConfig::$SessionUseStrictMode);

	\Configs\SessionConfig::SessionUseCookies(\Configs\SessionConfig::$SessionUseCookies);

	\Configs\SessionConfig::SessionCookieSecure(\Configs\SessionConfig::$SessionCookieSecure);

	\Configs\SessionConfig::SessionUseOnlyCookies(\Configs\SessionConfig::$SessionUseOnlyCookies);

	\Configs\SessionConfig::SessionName(\Configs\SessionConfig::$SessionName);

	\Configs\SessionConfig::SessionAutoStart(\Configs\SessionConfig::$SessionAutoStart);

	\Configs\SessionConfig::SessionCookieLifetime(\Configs\SessionConfig::$SessionCookieLifetime);

	\Configs\SessionConfig::SessionCookiePath(\Configs\SessionConfig::$SessionCookiePath);

	\Configs\SessionConfig::SessionCookieDomain(\Configs\SessionConfig::$SessionCookieDomain);

	\Configs\SessionConfig::SessionCookieHttponly(\Configs\SessionConfig::$SessionCookieHttponly);

	\Configs\SessionConfig::SessionSerializeHandler(\Configs\SessionConfig::$SessionSerializeHandler);

	\Configs\SessionConfig::SessionGCProbability(\Configs\SessionConfig::$SessionGCProbability);

	\Configs\SessionConfig::SessionGCDivisor(\Configs\SessionConfig::$SessionGCDivisor);

	\Configs\SessionConfig::SessionGCMaxlifetime(\Configs\SessionConfig::$SessionGCMaxlifetime);

	\Configs\SessionConfig::SessionRefererCheck(\Configs\SessionConfig::$SessionRefererCheck);

	\Configs\SessionConfig::SessionCacheLimiter(\Configs\SessionConfig::$SessionCacheLimiter);

	\Configs\SessionConfig::SessionCacheExpire(\Configs\SessionConfig::$SessionCacheExpire);

	\Configs\SessionConfig::SessionUseTransSid(\Configs\SessionConfig::$SessionUseTransSid);

	\Configs\SessionConfig::SessionSidLength(\Configs\SessionConfig::$SessionSidLength);

	\Configs\SessionConfig::SessionTransSidTags(\Configs\SessionConfig::$SessionTransSidTags);

	\Configs\SessionConfig::SessionTransSidHosts(\Configs\SessionConfig::$SessionTransSidHosts);

	\Configs\SessionConfig::SessionSidBitsPerCharacter(\Configs\SessionConfig::$SessionSidBitsPerCharacter);

	\Configs\SessionConfig::SessionUploadProgressEnabled(\Configs\SessionConfig::$SessionUploadProgressEnabled);

	\Configs\SessionConfig::SessionUploadProgressCleanup(\Configs\SessionConfig::$SessionUploadProgressCleanup);

	\Configs\SessionConfig::SessionUploadProgressPrefix(\Configs\SessionConfig::$SessionUploadProgressPrefix);

	\Configs\SessionConfig::SessionUploadProgressName(\Configs\SessionConfig::$SessionUploadProgressName);

	\Configs\SessionConfig::SessionUploadProgressFreq(\Configs\SessionConfig::$SessionUploadProgressFreq);

	\Configs\SessionConfig::SessionUploadProgressMinFreq(\Configs\SessionConfig::$SessionUploadProgressMinFreq);

	\Configs\SessionConfig::SessionLazyWrite(\Configs\SessionConfig::$SessionLazyWrite);

    }
}
