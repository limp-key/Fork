<?php

namespace Embranchment\Model\SQLite;

use Embranchment\Model\SQLite\CRUD;
use Embranchment\Model\SQLite\DesiredResponse;
use Embranchment\Model\SQLite\DataBaseManipulate;
use Embranchment\Model\SQLite\SecondaryFunctions;

class TraitCollector {

    use CRUD;
    
    use DesiredResponse;

    use DataBaseManipulate;

    use SecondaryFunctions;
}
