<?php

$headers = apache_request_headers();
echo "<pre>";
var_dump($headers);
echo "</pre>";

$headers = apache_response_headers();
echo "<pre>";
var_dump($headers);
echo "</pre>";

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";


echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

include "../bin/load.php";
