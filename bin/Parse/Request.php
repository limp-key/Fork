<?php
/*echo '<pre>';
var_dump($_SERVER);
echo '</pre>';*/
if(!empty($_SERVER)){
    if(empty($_SERVER['REDIRECT_URL'])){
	$_SERVER['REDIRECT_URL'] = substr_replace($_SERVER['REQUEST_URI'],'/',0);
    }
}
