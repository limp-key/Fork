<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletZlibConfig;

class ZlibConfig extends SkeletZlibConfig{

    public static $ZlibOutputCompression = 'Off';

    public static $ZlibOutputCompressionLevel = '-1';

    public static $ZlibOutputHandler = '';
}
