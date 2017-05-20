<?php

namespace Second;
use First\First;
class Second{

    public function inp(){
	$p = new First();
	$p->inp();
	echo "row";
    }
}
