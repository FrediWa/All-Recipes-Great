<?php
session_start();
function sanitize_text($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//database configuration
$servername ="localhost";
$username = "";
$password = "";
$db_name = "";
?>
