<?php

namespace Fork\Bin\Config;

class SkeletPCREConfig{

    public static $PcreBacktrackLimit='100000';

    public static $PcreRecursionLimit='100000';

    public static $PcreJit='0';

    
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
