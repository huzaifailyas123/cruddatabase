<?php

$hostName = "localhost";
$user = "root";
$password = "";
$databaseName = "curddb";

$con = mysqli_connect($hostName, $user, $password, $databaseName);

if(!$con)
{
    echo "Connection Failled";
}

?>