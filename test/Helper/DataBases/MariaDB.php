<?php

namespace Configs;

use \Embranchment\Config\Custom\SkeletDataBaseConfig;

class DataBase extends SkeletDataBaseConfig {

    # Connection to database
    #
    # Fork supported poly-database connection
    # But you can create default connection
    #
    # If the model does not accept the parameters,
    # then the connection will be made according to these settings

    # Fork supports SQL and NoSQL servers:
    #
    # MySQL      - Allows you to access the functionality provided by MySQL 4.1 and above
    # SQLite     - This is an extension for the SQLite Embeddable SQL Database Engine
    # PostgreSQL - Mudule for connection to a PostgreSQL Database
    # MongoDB    - It is responsible for maintaining connections to MongoDB
    #
    public static $Drive = 'MySQL';

    # DataBase host
    #
    # Host on which the database server is installed
    #
    public static $Host = 'localhost';

    # DataBase user
    #
    # Connection to the user on the database server
    #
    public static $UserName = 'root';

    # DataBase password
    #
    # The password of the user you are connected to
    #
    public static $Password = 'Lamp2comp!';

    # DataBase database
    #
    # Select database
    #
    public static $DataBase = 'testfork';
    
}
