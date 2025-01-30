<?php
$user = "root";
$pw = "root";
$port = 8889;
$host = "localhost";
$db = "blog";

// this is for connecting with for database 
$conn = new mysqli($host, $user, $pw, $db, $port);
?>