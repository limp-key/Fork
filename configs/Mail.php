<?php

namespace Configs;

<<<<<<< HEAD
use \Fork\Config\Custom\SkeletMailConfig;
=======
use \Fork\Config\Types\SkeletMailConfig;
>>>>>>> parent of 2a5056c... Structure

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
