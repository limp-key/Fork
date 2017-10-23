<?php

namespace \Embranchment\Model\SQLite;

class Connection {

    # Connection to database
    #
    # Fork supported poly-database connection
    # But you can create default connection
    #
    # If the model does not accept the parameters,
    # then the connection will be made according to these settings

    # DataBase location
    #
    # Host on which the database server is installed
    #
    public static $Path = '/path/to/database.db';
}
