<?php

/*
 * 
 */
function Comprise($File){

    $Layout = sprintf('%s/../../../../../../views/%s', __DIR__, $File);

    include $Layout;

    return true;
}

/*
 * View token in Session variable
 * 
 * @return bool
 */
function Token(){

    echo $_SESSION['Token'];
    
    return true;
}
