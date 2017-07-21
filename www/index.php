<?php

# This file load all files in Fork framework
# and all client Controllers/Models/View/Route/Config

error_reporting(E_ALL);
ini_set("display_errors", '1');

ini_set('error_prepend_string','<style>html,body{background:#F1F1F1;padding:0;margin:0;height:100%;font-family:Arial;width:100%;}</style><div style="padding: 20px;background: #fff;box-shadow: 0 0 15px #d3d3d3;margin:25px;">');
ini_set('error_append_string','</div>');

require_once "../bin/load.php";
