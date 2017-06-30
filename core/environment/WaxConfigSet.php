<?php

/*
    WaxConfigSet

    Type: configuration
    Object: Configuration variables
    Update: *******
    Author: A Guerrero
*/

$devServerList = array("127.0.0.1", "::1", "192.168.0.102", "localhost");
$folderDev = "motormexa";
$location = "Motormexa";

if(!in_array($_SERVER["SERVER_NAME"], $devServerList)){
    $urlHost  = isset($_SERVER["HTTPS"]) ? "https://" : "http://";
    $urlHost .= $_SERVER["SERVER_NAME"] . "/";
    define("_HOST", $urlHost);
    define("_MAX", "http://clicktolead.com.mx/api/v1/remote/action");
} else {
    $urlHost  = isset($_SERVER["HTTPS"]) ? "https://" : "http://";
    $urlHost .= $_SERVER["SERVER_NAME"] . "/" . $folderDev."/";
    define("_HOST", $urlHost);
    define("_MAX", "http://localhost/maxleads/api/v1/remote/action");
}

define("_LOC", $location);

?>
