<?php

namespace Fork\Config;

use \Fork\Config\SkeletZlibConfig;

class ZlibConfig extends SkeletZlibConfig{

    public static $ZlibOutputCompression = 'Off';

    public static $ZlibOutputCompressionLevel = '-1';

    public static $ZlibOutputHandler = '';
}
