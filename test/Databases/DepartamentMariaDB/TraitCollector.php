<?php

namespace Embranchment\Databases\DepartamentMariaDB;

use Embranchment\Databases\DepartamentMariaDB\CRUD;
use Embranchment\Databases\DepartamentMariaDB\DesiredResponse;
use Embranchment\Databases\DepartamentMariaDB\DataBaseManipulate;
use Embranchment\Databases\DepartamentMariaDB\SecondaryFunctions;

class TraitCollector {

    use CRUD;
    
    use DesiredResponse;

    use DataBaseManipulate;

    use SecondaryFunctions;
}
