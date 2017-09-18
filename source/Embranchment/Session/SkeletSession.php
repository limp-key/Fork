<?php

namespace Embranchment\Session;

use \Embranchment\Session\SessionFileCreate;
use \Embranchment\Session\SessionDataBaseCreate;

class SkeletSession() {

    use SessionFileCreate;

    use SessionDataBaseCreate;
}
