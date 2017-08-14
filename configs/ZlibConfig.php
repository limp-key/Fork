<?php

namespace Configs;

use \Fork\Config\SkeletZlibConfig;

class ZlibConfig extends SkeletZlibConfig{

    public static $ZlibOutputCompression = 'On';

    public static $ZlibOutputCompressionLevel = '9';

    public static $ZlibOutputHandler = '';
}
