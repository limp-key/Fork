<?php

namespace Fork\AutoLoad;

require_once 'AutoLoadConverter.php';

require_once 'AutoLoadInclude.php';

use \Fork\AutoLoad\AutoLoadConverter;
use \Fork\AutoLoad\AutoLoadInclude;

class SkeletAutoLoad {

    use AutoLoadConverter;

    use AutoLoadInclude;
}
