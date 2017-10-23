<?php

namespace \Embranchment\Model\MongoDB;

class Connection {

    # Connection to database
    #
    # Fork supported poly-database connection
    # But you can create default connection
    #
    # If the model does not accept the parameters,
    # then the connection will be made according to these settings

    # Fork supports NoSQL servers:
    #
    public static $Port = '0000';

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
    public static $Password = 'password';
}
