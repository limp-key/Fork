<?php

namespace Fork/Config;

class SkeletPCREConfig{

    public static $PcreBacktrackLimit;

    public static $PcreRecursionLimit;

    public static $PcreJit;

    #
    public static function PcreBacktrackLimit($Parameter = 100000){

	ini_set('pcre.backtrack_limit',$Parameter);
	
	return true;
    }

    #PCRE library recursion limit.
    #Please note that if you set this value to a high number you may consume all
    #the available process stack and eventually crash PHP (due to reaching the
    #stack size limit imposed by the Operating System).
    public static function PcreRecursionLimit($Parameter = 100000){

	ini_set('pcre.recursion_limit',$Parameter);
	
	return true;
    }

    #Enables or disables JIT compilation of patterns. This requires the PCRE
    #library to be compiled with JIT support.
    public static function PcreJit($Parameter = 0){

	ini_set('pcre.jit',$Parameter);
	
	return true;
    }
}
