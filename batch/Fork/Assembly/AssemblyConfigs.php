<?php

namespace Fork\Assembly;

class AssemblyConfigs {

    public static function Defaults() {
	
	\Fork\Config\Custom\SkeletDefaultConfig::ExposePHP('Off');
	
	\Fork\Config\Custom\SkeletDefaultConfig::ImplicitFlush('parameter');
	
	\Fork\Config\Custom\SkeletDefaultConfig::Precision('15');
	
	\Fork\Config\Custom\SkeletDefaultConfig::RequestOrder(\Fork\Config\Custom\SkeletDefaultConfig::$RequestOrder);

	\Fork\Config\Custom\SkeletDefaultConfig::RegisterArgcArgv(\Fork\Config\Custom\SkeletDefaultConfig::$RegisterArgcArgv);

	\Fork\Config\Custom\SkeletDefaultConfig::AutoGlobalsJit(\Fork\Config\Custom\SkeletDefaultConfig::$AutoGlobalsJit);

	\Fork\Config\Custom\SkeletDefaultConfig::OutputBuffering(\Fork\Config\Custom\SkeletDefaultConfig::$OutputBuffering);

	\Fork\Config\Custom\SkeletDefaultConfig::UnserializeCallbackFunc(\Fork\Config\Custom\SkeletDefaultConfig::$UnserializeCallbackFunc);

	\Fork\Config\Custom\SkeletDefaultConfig::SerializePrecision(\Fork\Config\Custom\SkeletDefaultConfig::$SerializePrecision);

	\Fork\Config\Custom\SkeletDefaultConfig::RealPathCacheSize(\Fork\Config\Custom\SkeletDefaultConfig::$RealPathCacheSize);

	\Fork\Config\Custom\SkeletDefaultConfig::RealPathCacheTTL(\Fork\Config\Custom\SkeletDefaultConfig::$RealPathCacheTTL);

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
