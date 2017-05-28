<?php

// Zero firewall

require_once 'FireWall/Assay.php';

// First parse request

require_once 'Parse/Parse.php';
require_once 'Route/Route.php';

// Second load all config in this framework

require_once '../config/config.php';

// conect to Database
require_once 'DataBase/ConnectionToDataBase.php';

// Third load Model and Controller in bin folder

require_once 'Controller/Controller.php';
require_once 'Model/Model.php';

// load Model, Controller, View

require_once 'Assembly/assembly.php';
