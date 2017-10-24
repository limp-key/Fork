<?php

namespace Configs;

use \Embranchment\Config\Custom\SkeletSystemConfig;

class System extends SkeletSystemConfig{

    #
    #
    public static $DefaultMimetype = "text/html";

    #
    #
    public static $DefaultCharset = "UTF-8";

    # Timezone of the server on which this project is located
    #
    public static $DateTimezone = 'Europe/Kiev';

}
