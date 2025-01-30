<?php
require('database.php');
$id = $_GET['eid'];

$sql = "DELETE FROM tbl_add WHERE id = '$id'";
$conn->query($sql);
header('Location:homepage.php');
?>