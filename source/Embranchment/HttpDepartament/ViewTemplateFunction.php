<?php

/*
 * Include file for this template
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
function TokenCode(){

    echo $_SESSION['token'];
    
    return true;
}

/*
 * View input token in Session variable
 * 
 * @return bool
 */
function TokenInput(){

    echo '<input name="token" type="hidden" value="'.$_SESSION['token'].'">';
    
    return true;
}
