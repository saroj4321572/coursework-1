<?php
require("database.php");

$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pdesc = $_POST['pdesc'];
$pquantity = $_POST['pquantity'];

$q = "insert into product(id, pname, pprice, pdesc, pquantity, userid) 
values(Null, '$pname', '$pprice', '$pdesc', '$pquantity', 6)";
 
$conn->query($q);

header('Location:index.php');
exit;
?>