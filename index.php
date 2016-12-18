<?php



function wall($input){

    $input = htmlentities($input);
    $input = $mysqli -> escape_string($input);
    
}
