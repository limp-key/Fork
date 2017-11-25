<?php

namespace Embranchment\Databases\DepartamentSQLite;

use Embranchment\Databases\DepartamentSQLite\CRUD;
use Embranchment\Databases\DepartamentSQLite\DesiredResponse;
use Embranchment\Databases\DepartamentSQLite\DataBaseManipulate;
use Embranchment\Databases\DepartamentSQLite\SecondaryFunctions;

class TraitCollector {

    use CRUD;
    
    use DesiredResponse;

    use DataBaseManipulate;

    use SecondaryFunctions;
}
