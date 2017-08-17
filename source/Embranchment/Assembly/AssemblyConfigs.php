<?php

namespace Embranchment\Assembly;

class AssemblyConfigs {

    public static function Defaults() {
	
	\Embranchment\Config\Custom\SkeletDefaultConfig::ExposePHP('Off');
	
	\Embranchment\Config\Custom\SkeletDefaultConfig::ImplicitFlush('parameter');
	
	\Embranchment\Config\Custom\SkeletDefaultConfig::Precision('15');
	
	\Embranchment\Config\Custom\SkeletDefaultConfig::RequestOrder(\Embranchment\Config\Custom\SkeletDefaultConfig::$RequestOrder);

	\Embranchment\Config\Custom\SkeletDefaultConfig::RegisterArgcArgv(\Embranchment\Config\Custom\SkeletDefaultConfig::$RegisterArgcArgv);

	\Embranchment\Config\Custom\SkeletDefaultConfig::AutoGlobalsJit(\Embranchment\Config\Custom\SkeletDefaultConfig::$AutoGlobalsJit);

	\Embranchment\Config\Custom\SkeletDefaultConfig::OutputBuffering(\Embranchment\Config\Custom\SkeletDefaultConfig::$OutputBuffering);

	\Embranchment\Config\Custom\SkeletDefaultConfig::UnserializeCallbackFunc(\Embranchment\Config\Custom\SkeletDefaultConfig::$UnserializeCallbackFunc);

	\Embranchment\Config\Custom\SkeletDefaultConfig::SerializePrecision(\Embranchment\Config\Custom\SkeletDefaultConfig::$SerializePrecision);

	\Embranchment\Config\Custom\SkeletDefaultConfig::RealPathCacheSize(\Embranchment\Config\Custom\SkeletDefaultConfig::$RealPathCacheSize);

	\Embranchment\Config\Custom\SkeletDefaultConfig::RealPathCacheTTL(\Embranchment\Config\Custom\SkeletDefaultConfig::$RealPathCacheTTL);

	return true;
    }

    public static function Configs(){

	# System

	\Configs\System::DefaultMimetype(\Configs\System::$DefaultMimetype);

	\Configs\System::DefaultCharset(\Configs\System::$DefaultCharset);
	
	# Error

	\Configs\Error::HtmlErrors(\Configs\Error::$HtmlErrors);

	\Configs\Error::ErrorPrependString(\Configs\Error::$ErrorPrependString);

	\Configs\Error::ErrorAppendString(\Configs\Error::$ErrorAppendString);

	\Configs\Error::ErrorLog(\Configs\Error::$ErrorLog);

	\Configs\Error::ErrorReporting(\Configs\Error::$ErrorReporting);

	\Configs\Error::DisplayErrors(\Configs\Error::$DisplayErrors);

	\Configs\Error::DisplayStartupErrors(\Configs\Error::$DisplayStartupErrors);

	\Configs\Error::LogErrors(\Configs\Error::$LogErrors);

	\Configs\Error::LogErrorsMaxLen(\Configs\Error::$LogErrorsMaxLen);

	\Configs\Error::IgnoreRepeatedErrors(\Configs\Error::$IgnoreRepeatedErrors);
	
	\Configs\Error::XMLrpcErrors(\Configs\Error::$XMLrpcErrors);

	\Configs\Error::XMLrpcErrorNumber(\Configs\Error::$XMLrpcErrorNumber);

	\Configs\Error::TrackErrors(\Configs\Error::$TrackErrors);

	# Session

	\Configs\Session::SessionSaveHandler(\Configs\Session::$SessionSaveHandler);

	\Configs\Session::SessionSavePath(\Configs\Session::$SessionSavePath);

	\Configs\Session::SessionUseStrictMode(\Configs\Session::$SessionUseStrictMode);

	\Configs\Session::SessionUseCookies(\Configs\Session::$SessionUseCookies);

	\Configs\Session::SessionCookieSecure(\Configs\Session::$SessionCookieSecure);

	\Configs\Session::SessionUseOnlyCookies(\Configs\Session::$SessionUseOnlyCookies);

	\Configs\Session::SessionName(\Configs\Session::$SessionName);

	\Configs\Session::SessionAutoStart(\Configs\Session::$SessionAutoStart);

	\Configs\Session::SessionCookieLifetime(\Configs\Session::$SessionCookieLifetime);

	\Configs\Session::SessionCookiePath(\Configs\Session::$SessionCookiePath);

	\Configs\Session::SessionCookieDomain(\Configs\Session::$SessionCookieDomain);

	\Configs\Session::SessionCookieHttponly(\Configs\Session::$SessionCookieHttponly);

	\Configs\Session::SessionSerializeHandler(\Configs\Session::$SessionSerializeHandler);

	\Configs\Session::SessionGCProbability(\Configs\Session::$SessionGCProbability);

	\Configs\Session::SessionGCDivisor(\Configs\Session::$SessionGCDivisor);

	\Configs\Session::SessionGCMaxlifetime(\Configs\Session::$SessionGCMaxlifetime);

	\Configs\Session::SessionRefererCheck(\Configs\Session::$SessionRefererCheck);

	\Configs\Session::SessionCacheLimiter(\Configs\Session::$SessionCacheLimiter);

	\Configs\Session::SessionCacheExpire(\Configs\Session::$SessionCacheExpire);

	\Configs\Session::SessionUseTransSid(\Configs\Session::$SessionUseTransSid);

	\Configs\Session::SessionSidLength(\Configs\Session::$SessionSidLength);

	\Configs\Session::SessionTransSidTags(\Configs\Session::$SessionTransSidTags);

	\Configs\Session::SessionTransSidHosts(\Configs\Session::$SessionTransSidHosts);

	\Configs\Session::SessionSidBitsPerCharacter(\Configs\Session::$SessionSidBitsPerCharacter);

	\Configs\Session::SessionUploadProgressEnabled(\Configs\Session::$SessionUploadProgressEnabled);

	\Configs\Session::SessionUploadProgressCleanup(\Configs\Session::$SessionUploadProgressCleanup);

	\Configs\Session::SessionUploadProgressPrefix(\Configs\Session::$SessionUploadProgressPrefix);

	\Configs\Session::SessionUploadProgressName(\Configs\Session::$SessionUploadProgressName);

	\Configs\Session::SessionUploadProgressFreq(\Configs\Session::$SessionUploadProgressFreq);

	\Configs\Session::SessionUploadProgressMinFreq(\Configs\Session::$SessionUploadProgressMinFreq);

	\Configs\Session::SessionLazyWrite(\Configs\Session::$SessionLazyWrite);

	return true;
    }
}
