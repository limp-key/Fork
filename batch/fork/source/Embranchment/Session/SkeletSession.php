<?php

namespace Fork\Session;

use \Fork\Session\SessionFileCreate;
use \Fork\Session\SessionDataBaseCreate;

class SkeletSession() {

    use SessionFileCreate;

    use SessionDataBaseCreate;
}
