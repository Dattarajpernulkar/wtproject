<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "sweet";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$conn){
    die(mysqli_connect_errno());
}

?>