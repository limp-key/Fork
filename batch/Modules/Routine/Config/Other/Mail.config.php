<?php

namespace Fork\Config\__NAME__;

use \Fork\Config\MailConfig;

class Mail extends MailConfig {

    // Connect to mail server

    public static $Driver = 'smtp';

    public static $Port = '25';
    
    public static $Host = 'localhost';

    public static $UserName = 'User';

    public static $Password = 'Password';
    
}
