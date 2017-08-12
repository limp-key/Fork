<?php

namespace Fork\Config\__NAME__;

use \Fork\Config\PCREConfig;

class PCRE extends PCREConfig{

    public static $PcreBacktrackLimit = 1000000;

    public static $PcreRecursionLimit = 100000;

    public static $PcreJit = 0;

}
