<?php

namespace Fork\Model\MySQL;

use Fork\Model\CRUD;
use Fork\Model\DesiredResponse;
use Fork\Model\DataBaseManipulate;
use Fork\Model\SecondaryFunctions;

class TraitCollector {

    use CRUD;
    
    use DesiredResponse;

    use DataBaseManipulate;

    use SecondaryFunctions;
}
