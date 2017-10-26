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
    }

    /*
     *
     */
    public static function Configs(){

    }
}

