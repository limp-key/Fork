<?php

namespace Embranchment\Model\MySQL;

use Embranchment\Model\MySQL\CRUD;
use Embranchment\Model\MySQL\DesiredResponse;
use Embranchment\Model\MySQL\DataBaseManipulate;
use Embranchment\Model\MySQL\SecondaryFunctions;

class TraitCollector {

    use CRUD;
    
    use DesiredResponse;

    use DataBaseManipulate;

    use SecondaryFunctions;
}
