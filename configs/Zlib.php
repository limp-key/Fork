<?php

namespace Fork\Config;

use \Fork\Bin\Config\SkeletZlibConfig;

class ZlibConfig extends SkeletZlibConfig{

    public static $ZlibOutputCompression = 'On';

    public static $ZlibOutputCompressionLevel = '9';

    public static $ZlibOutputHandler = '';
}
