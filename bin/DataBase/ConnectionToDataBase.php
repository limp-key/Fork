<?php

$MySQLi = new mysqli($Host, $User, $Password, $Database);

unset($Host);
unset($User);
unset($Password);
unset($Database);
