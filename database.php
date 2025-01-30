<?php
$user = "root";
$pw = "root";
$host = "localhost";
$port = 8889;
$db = "myapp";

// this is for connecting with for database 
$conn = new mysqli($host, $user, $pw, $db, $port);
