<?php
require("database.php");

$id=$_GET['usrid'];

$sql = "DELETE FROM product WHERE id = '".$id."'";
$conn->query($sql);
header('Location:index.php');

?>