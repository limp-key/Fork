<?php

namespace Configs;

use \Fork\Config\Custom\SkeletMailConfig;

class Mail extends SkeletMailConfig {

    # Connection to mail server
    #
    #

    #
    #
    public static $Driver = 'smtp';

    #
    #
    public static $Port = '25';

    #
    #
    public static $Host = 'localhost';

    #
    #
    public static $UserName = 'User';

    #
    #
    public static $Password = 'Password';
}
