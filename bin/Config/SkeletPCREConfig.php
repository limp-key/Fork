<?php

namespace Fork\Bin\Config;

class SkeletPCREConfig{

    public static $PcreBacktrackLimit;

    public static $PcreRecursionLimit;

    public static $PcreJit;

    
    public static function PcreBacktrackLimit($Parameter){

	ini_set();
	
	return true;
    }

    public static function PcreRecursionLimit($Parameter){

	ini_set();
	
	return true;
    }

    public static function PcreJit($Parameter){

	ini_set();
	
	return true;
    }
}
