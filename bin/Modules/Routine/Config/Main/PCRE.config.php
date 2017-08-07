<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletPCREConfig;

class PCREConfig extends SkeletPCREConfig{

    public static $PcreBacktrackLimit = 1000000;

    public static $PcreRecursionLimit = 100000;

    public static $PcreJit = 0;

}
